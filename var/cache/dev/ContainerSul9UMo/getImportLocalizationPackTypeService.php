<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Improve\International\Localization\ImportLocalizationPackType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Improve\\International\\Localization\\ImportLocalizationPackType'] = new \PrestaShopBundle\Form\Admin\Improve\International\Localization\ImportLocalizationPackType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.localization_pack_by_iso_code'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_LocalizationPackByIsoCodeService.php'))->getChoices());
