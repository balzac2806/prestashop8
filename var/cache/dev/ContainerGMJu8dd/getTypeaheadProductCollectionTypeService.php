<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Type\TypeaheadProductCollectionType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Type\\TypeaheadProductCollectionType'] = new \PrestaShopBundle\Form\Admin\Type\TypeaheadProductCollectionType(($this->services['prestashop.adapter.data_provider.product'] ?? $this->load('getPrestashop_Adapter_DataProvider_ProductService.php')), ($this->services['prestashop.adapter.data_provider.category'] ?? $this->load('getPrestashop_Adapter_DataProvider_CategoryService.php')));
