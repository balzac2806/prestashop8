<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Feature\CommandHandler\DeleteFeatureHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Feature\\CommandHandler\\DeleteFeatureHandler'] = new \PrestaShop\PrestaShop\Adapter\Feature\CommandHandler\DeleteFeatureHandler(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureRepository'] ?? $this->load('getFeatureRepositoryService.php')));
