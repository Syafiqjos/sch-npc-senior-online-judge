<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Jury\ScoreboardController' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/Jury/ScoreboardController.php';

$this->services['App\\Controller\\Jury\\ScoreboardController'] = $instance = new \App\Controller\Jury\ScoreboardController(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->privates['App\\Service\\ScoreboardService'] ?? $this->getScoreboardServiceService()));

$instance->setContainer(($this->privates['.service_locator.amdXAV_'] ?? $this->load('get_ServiceLocator_AmdXAVService.php'))->withContext('App\\Controller\\Jury\\ScoreboardController', $this));

return $instance;
