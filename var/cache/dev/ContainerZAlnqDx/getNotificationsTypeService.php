<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Administration\NotificationsType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Administration\\NotificationsType'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Administration\NotificationsType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages());
