<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.cms_page.query_handler.get_cms_page_categories_for_breadcrumbs' shared service.

return $this->services['prestashop.adapter.cms_page.query_handler.get_cms_page_categories_for_breadcrumbs'] = new \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\QueryHandler\GetCmsPageCategoriesForBreadcrumbHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id);
