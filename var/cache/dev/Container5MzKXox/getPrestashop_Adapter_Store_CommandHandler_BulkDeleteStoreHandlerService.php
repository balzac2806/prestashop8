<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.store.command_handler.bulk_delete_store_handler' shared service.

return $this->services['prestashop.adapter.store.command_handler.bulk_delete_store_handler'] = new \PrestaShop\PrestaShop\Adapter\Store\CommandHandler\BulkDeleteStoreHandler(($this->services['prestashop.core.domain.store.repository.store_repository'] ?? $this->load('getPrestashop_Core_Domain_Store_Repository_StoreRepositoryService.php')));
