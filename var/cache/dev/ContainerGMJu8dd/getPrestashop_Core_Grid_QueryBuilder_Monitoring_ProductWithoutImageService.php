<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.query_builder.monitoring.product_without_image' shared service.

return $this->services['prestashop.core.grid.query_builder.monitoring.product_without_image'] = new \PrestaShop\PrestaShop\Core\Grid\Query\Monitoring\ProductWithoutImageQueryBuilder(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id, ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id, ($this->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\DoctrineSearchCriteriaApplicatorInterface'] ?? ($this->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\DoctrineSearchCriteriaApplicatorInterface'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator())), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->getMultistoreFeatureService()));
