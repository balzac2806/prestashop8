<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.builder.tax_rules_group_form_builder' shared service.

return $this->services['prestashop.core.form.identifiable_object.builder.tax_rules_group_form_builder'] = ($this->services['prestashop.core.form.builder.form_builder_factory'] ?? $this->load('getPrestashop_Core_Form_Builder_FormBuilderFactoryService.php'))->create('PrestaShopBundle\\Form\\Admin\\Improve\\International\\Tax\\TaxRulesGroupType', ($this->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataProvider\\TaxRulesGroupFormDataProvider'] ?? $this->load('getTaxRulesGroupFormDataProviderService.php')));
