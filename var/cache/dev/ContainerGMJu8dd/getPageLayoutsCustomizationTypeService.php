<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Improve\Design\Theme\PageLayoutsCustomizationType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Improve\\Design\\Theme\\PageLayoutsCustomizationType'] = new \PrestaShopBundle\Form\Admin\Improve\Design\Theme\PageLayoutsCustomizationType(($this->services['prestashop.core.form.choice_provider.theme_page_layouts'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_ThemePageLayoutsService.php'))->getChoices());
