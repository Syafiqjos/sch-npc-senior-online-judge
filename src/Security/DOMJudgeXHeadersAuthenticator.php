<?php declare(strict_types=1);

namespace App\Security;

use App\Service\ConfigurationService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class DOMJudgeXHeadersAuthenticator extends AbstractGuardAuthenticator
{
    use TargetPathTrait;

    private $security;
    private $encoder;
    private $config;
    private $router;

    /**
     * DOMJudgeXHeadersAuthenticator constructor.
     *
     * @param Security                     $security
     * @param UserPasswordEncoderInterface $encoder
     * @param ConfigurationService         $config
     * @param RouterInterface              $router
     */
    public function __construct(
        Security $security,
        UserPasswordEncoderInterface $encoder,
        ConfigurationService $config,
        RouterInterface $router
    ) {
        $this->security = $security;
        $this->encoder  = $encoder;
        $this->config   = $config;
        $this->router   = $router;
    }

    /**
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning false will cause this authenticator
     * to be skipped.
     */
    public function supports(Request $request)
    {
        $authmethods = $this->config->get('auth_methods');
        $auth_allow_xheaders = in_array('xheaders', $authmethods);
        if (!$auth_allow_xheaders) {
            return false;
        }

        // if there is already an authenticated user (likely due to the session)
        // then return null and skip authentication: there is no need.
        if ($this->security->getUser()) {
            return false;
        }
        // We also support authenticating if it's a POST to the login route
        if ($request->attributes->get('_route') === 'login'
            && $request->isMethod('POST')
            && $request->request->get('loginmethod') === 'xheaders') {
            return true;
        }
        return false;
    }

    /**
     * Called on every request. Return whatever credentials you want to
     * be passed to getUser() as $credentials.
     */
    // Anggep ae username iki e-mail yo
    public function getCredentials(Request $request)
    {
        return [
//             'username' => trim($request->headers->get('X-DOMjudge-Login')),
            'username' => $this->getEmailFromSchematics(trim($request->request->get('token', ''))),
            'password' => $password = base64_decode(trim($request->request->get('token', ''))),
        ];
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        if ($credentials['username'] == null) {
            return null;
        }
        return $userProvider->loadUserByUsername($credentials['username']);
    }
    
    private function getEmailFromSchematics($jwt) {
        // API URL
        $url = 'https://schematics.its.ac.id/api/user/get-user-info';

        // Create a new cURL resource
        $ch = curl_init($url);

        // Setup request to send json via POST
        $payload = json_encode(array());

        // Attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        // Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: Bearer '.$jwt));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        // Execute the POST request
        $result = curl_exec($ch);

        // Close cURL resource
        curl_close($ch);

        $data = json_decode($result, true);
        
        if (!$data) {
            throw new CustomUserMessageAuthenticationException('internal-error');
        }
        
        if ($data['success'] == false) {
            throw new CustomUserMessageAuthenticationException('schematics-unauthenticated');
        }

        foreach($data['data']['team'] as $team) {
            if($team['event'] == 'npc_junior') {
                throw new CustomUserMessageAuthenticationException('npc-junior');
            }
            if($team['event'] == 'npc_senior') {
                return $data['data']['email'];
            }
        }
        throw new CustomUserMessageAuthenticationException('not-npc-participant');      
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        return true;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        // on success, redirect to the last page or the homepage if it was a user triggered action
        if ($request->attributes->get('_route') === 'login'
            && $request->isMethod('POST')
            && $request->request->get('loginmethod') === 'xheaders') {

            // Use target URL from session if set
            if ($providerKey !== null &&
                $targetUrl = $this->getTargetPath($request->getSession(), $providerKey)) {
                $this->removeTargetPath($request->getSession(), $providerKey);
                return new RedirectResponse($targetUrl);
            }

            return new RedirectResponse($this->router->generate('root'));
        }
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        if ($exception instanceof UsernameNotFoundException) {
            $exception = new CustomUserMessageAuthenticationException('Anda belum terdaftar pada portal ini. Silahkan tunggu beberapa saat lagi.');
        } else if($exception->getMessage() == 'schematics-unauthenticated') {
            return new RedirectResponse('https://schematics.its.ac.id/dashboard/signin?redirect=sch-npc/portal/senior/');
        } else if($exception->getMessage() == 'internal-error') {
            $exception = new CustomUserMessageAuthenticationException('Internal error.');
        } else if($exception->getMessage() == 'npc-junior') {
            $exception = new CustomUserMessageAuthenticationException('Portal junior dapat diakses melalui https://junior.schematics-npc.com/');
        } else if($exception->getMessage() == 'not-npc-participant') {
            $exception = new CustomUserMessageAuthenticationException('Anda bukan pendaftar Schematics NPC 2021');
        }
        
        if ($request->hasSession()) {
            $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);
        }

        $url = 'https://senior.schematics-npc.com/login';

        return new RedirectResponse($url);
    }

    /**
     * Called when authentication is needed, but it's not sent
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        $data = array(
            'message' => 'Authentication Required'
        );

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    public function supportsRememberMe()
    {
        return false;
    }
}
