<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Configure\ShopParameters\ProductPreferences\PaginationType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\ProductPreferences\\PaginationType'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\ProductPreferences\PaginationType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages());
