<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.doctrine.orm.state.persist_processor' shared service.

return $this->privates['api_platform.doctrine.orm.state.persist_processor'] = new \ApiPlatform\Doctrine\Common\State\PersistProcessor(($this->services['doctrine'] ?? $this->getDoctrineService()));
