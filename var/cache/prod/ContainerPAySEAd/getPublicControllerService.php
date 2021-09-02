<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\PublicController' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/PublicController.php';

$this->services['App\\Controller\\PublicController'] = $instance = new \App\Controller\PublicController(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->privates['App\\Service\\ScoreboardService'] ?? $this->getScoreboardServiceService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

$instance->setContainer(($this->privates['.service_locator.amdXAV_'] ?? $this->load('get_ServiceLocator_AmdXAVService.php'))->withContext('App\\Controller\\PublicController', $this));

return $instance;
