<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Problem extends \App\Entity\Problem implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'probid', 'externalid', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'timelimit', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'memlimit', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'outputlimit', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'special_run', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'special_compare', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'special_compare_args', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'combined_run_compare', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'problemtext', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'problemtextFile', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'clearProblemtext', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'problemtext_type', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'submissions', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'clarifications', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'contest_problems', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'compare_executable', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'run_executable', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'testcases'];
        }

        return ['__isInitialized__', 'probid', 'externalid', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'timelimit', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'memlimit', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'outputlimit', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'special_run', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'special_compare', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'special_compare_args', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'combined_run_compare', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'problemtext', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'problemtextFile', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'clearProblemtext', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'problemtext_type', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'submissions', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'clarifications', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'contest_problems', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'compare_executable', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'run_executable', '' . "\0" . 'App\\Entity\\Problem' . "\0" . 'testcases'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Problem $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setProbid($probid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProbid', [$probid]);

        return parent::setProbid($probid);
    }

    /**
     * {@inheritDoc}
     */
    public function getProbid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getProbid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProbid', []);

        return parent::getProbid();
    }

    /**
     * {@inheritDoc}
     */
    public function setExternalid($externalid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternalid', [$externalid]);

        return parent::setExternalid($externalid);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalid', []);

        return parent::getExternalid();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimelimit($timelimit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimelimit', [$timelimit]);

        return parent::setTimelimit($timelimit);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimelimit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimelimit', []);

        return parent::getTimelimit();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemlimit($memlimit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemlimit', [$memlimit]);

        return parent::setMemlimit($memlimit);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemlimit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemlimit', []);

        return parent::getMemlimit();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutputlimit($outputlimit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutputlimit', [$outputlimit]);

        return parent::setOutputlimit($outputlimit);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutputlimit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutputlimit', []);

        return parent::getOutputlimit();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialRun($specialRun)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialRun', [$specialRun]);

        return parent::setSpecialRun($specialRun);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialRun()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialRun', []);

        return parent::getSpecialRun();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialCompare($specialCompare)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialCompare', [$specialCompare]);

        return parent::setSpecialCompare($specialCompare);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialCompare()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialCompare', []);

        return parent::getSpecialCompare();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialCompareArgs($specialCompareArgs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialCompareArgs', [$specialCompareArgs]);

        return parent::setSpecialCompareArgs($specialCompareArgs);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialCompareArgs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialCompareArgs', []);

        return parent::getSpecialCompareArgs();
    }

    /**
     * {@inheritDoc}
     */
    public function setCombinedRunCompare($combinedRunCompare)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCombinedRunCompare', [$combinedRunCompare]);

        return parent::setCombinedRunCompare($combinedRunCompare);
    }

    /**
     * {@inheritDoc}
     */
    public function getCombinedRunCompare()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCombinedRunCompare', []);

        return parent::getCombinedRunCompare();
    }

    /**
     * {@inheritDoc}
     */
    public function setProblemtext($problemtext)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProblemtext', [$problemtext]);

        return parent::setProblemtext($problemtext);
    }

    /**
     * {@inheritDoc}
     */
    public function setProblemtextFile($problemtextFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProblemtextFile', [$problemtextFile]);

        return parent::setProblemtextFile($problemtextFile);
    }

    /**
     * {@inheritDoc}
     */
    public function setClearProblemtext(bool $clearProblemtext)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClearProblemtext', [$clearProblemtext]);

        return parent::setClearProblemtext($clearProblemtext);
    }

    /**
     * {@inheritDoc}
     */
    public function getProblemtext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProblemtext', []);

        return parent::getProblemtext();
    }

    /**
     * {@inheritDoc}
     */
    public function getProblemtextFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProblemtextFile', []);

        return parent::getProblemtextFile();
    }

    /**
     * {@inheritDoc}
     */
    public function isClearProblemtext(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isClearProblemtext', []);

        return parent::isClearProblemtext();
    }

    /**
     * {@inheritDoc}
     */
    public function setProblemtextType($problemtextType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProblemtextType', [$problemtextType]);

        return parent::setProblemtextType($problemtextType);
    }

    /**
     * {@inheritDoc}
     */
    public function getProblemtextType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProblemtextType', []);

        return parent::getProblemtextType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompareExecutable(\App\Entity\Executable $compareExecutable = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompareExecutable', [$compareExecutable]);

        return parent::setCompareExecutable($compareExecutable);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompareExecutable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompareExecutable', []);

        return parent::getCompareExecutable();
    }

    /**
     * {@inheritDoc}
     */
    public function setRunExecutable(\App\Entity\Executable $runExecutable = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRunExecutable', [$runExecutable]);

        return parent::setRunExecutable($runExecutable);
    }

    /**
     * {@inheritDoc}
     */
    public function getRunExecutable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRunExecutable', []);

        return parent::getRunExecutable();
    }

    /**
     * {@inheritDoc}
     */
    public function addTestcase(\App\Entity\Testcase $testcase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTestcase', [$testcase]);

        return parent::addTestcase($testcase);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTestcase(\App\Entity\Testcase $testcase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTestcase', [$testcase]);

        return parent::removeTestcase($testcase);
    }

    /**
     * {@inheritDoc}
     */
    public function getTestcases()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTestcases', []);

        return parent::getTestcases();
    }

    /**
     * {@inheritDoc}
     */
    public function addContestProblem(\App\Entity\ContestProblem $contestProblem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContestProblem', [$contestProblem]);

        return parent::addContestProblem($contestProblem);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContestProblem(\App\Entity\ContestProblem $contestProblem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContestProblem', [$contestProblem]);

        return parent::removeContestProblem($contestProblem);
    }

    /**
     * {@inheritDoc}
     */
    public function getContestProblems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContestProblems', []);

        return parent::getContestProblems();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubmission(\App\Entity\Submission $submission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubmission', [$submission]);

        return parent::addSubmission($submission);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubmission(\App\Entity\Submission $submission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubmission', [$submission]);

        return parent::removeSubmission($submission);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmissions', []);

        return parent::getSubmissions();
    }

    /**
     * {@inheritDoc}
     */
    public function addClarification(\App\Entity\Clarification $clarification)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClarification', [$clarification]);

        return parent::addClarification($clarification);
    }

    /**
     * {@inheritDoc}
     */
    public function removeClarification(\App\Entity\Clarification $clarification)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeClarification', [$clarification]);

        return parent::removeClarification($clarification);
    }

    /**
     * {@inheritDoc}
     */
    public function getClarifications()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClarifications', []);

        return parent::getClarifications();
    }

    /**
     * {@inheritDoc}
     */
    public function processProblemText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'processProblemText', []);

        return parent::processProblemText();
    }

    /**
     * {@inheritDoc}
     */
    public function getApiIdField(\App\Service\EventLogService $eventLogService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiIdField', [$eventLogService]);

        return parent::getApiIdField($eventLogService);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiId(\App\Service\EventLogService $eventLogService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiId', [$eventLogService]);

        return parent::getApiId($eventLogService);
    }

}
