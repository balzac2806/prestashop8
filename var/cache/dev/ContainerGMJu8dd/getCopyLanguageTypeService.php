<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Improve\International\Translations\CopyLanguageType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\CopyLanguageType'] = new \PrestaShopBundle\Form\Admin\Improve\International\Translations\CopyLanguageType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.theme_by_name'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_ThemeByNameService.php'))->getChoices());
