<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta\ShopUrlType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\ShopUrlType'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta\ShopUrlType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService())->isActive(), ($this->services['prestashop.adapter.shop.shop_url'] ?? $this->load('getPrestashop_Adapter_Shop_ShopUrlService.php'))->doesMainShopUrlExist());
