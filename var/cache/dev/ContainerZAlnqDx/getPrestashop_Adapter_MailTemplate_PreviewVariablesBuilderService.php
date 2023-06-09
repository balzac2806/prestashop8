<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.mail_template.preview_variables_builder' shared service.

return $this->services['prestashop.adapter.mail_template.preview_variables_builder'] = new \PrestaShop\PrestaShop\Adapter\MailTemplate\MailPreviewVariablesBuilder(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()), ($this->services['prestashop.adapter.data_provider.employee'] ?? $this->load('getPrestashop_Adapter_DataProvider_EmployeeService.php')), ($this->services['prestashop.adapter.mail_template.partial_template_renderer'] ?? $this->load('getPrestashop_Adapter_MailTemplate_PartialTemplateRendererService.php')), ($this->services['prestashop.core.localization.locale.context_locale'] ?? $this->load('getPrestashop_Core_Localization_Locale_ContextLocaleService.php')), ($this->services['translator'] ?? $this->getTranslatorService()));
