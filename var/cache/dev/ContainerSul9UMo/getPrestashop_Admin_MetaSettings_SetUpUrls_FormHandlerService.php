<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.meta_settings.set_up_urls.form_handler' shared service.

return $this->services['prestashop.admin.meta_settings.set_up_urls.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.admin.traffic_seo.meta_settings.set_up_urls.form_data_provider'] ?? $this->load('getPrestashop_Admin_TrafficSeo_MetaSettings_SetUpUrls_FormDataProviderService.php')), 'PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\SetUpUrlType', 'MetaPage', 'meta_settings_set_up_urls_form');
