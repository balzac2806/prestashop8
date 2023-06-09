<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.file.htaccess_file_generator' shared service.

return $this->services['prestashop.adapter.file.htaccess_file_generator'] = new \PrestaShop\PrestaShop\Adapter\File\HtaccessFileGenerator(($this->services['prestashop.core.cache.clearer.cache_clearer_chain'] ?? $this->load('getPrestashop_Core_Cache_Clearer_CacheClearerChainService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getBoolean("PS_HTACCESS_DISABLE_MULTIVIEWS"));
