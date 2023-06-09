<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.doctrine.orm.default.item_data_provider' shared service.

return $this->privates['api_platform.doctrine.orm.default.item_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached.legacy'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_Cached_LegacyService()), new RewindableGenerator(function () {
    yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->load('getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService.php'));
}, 1), ($this->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService()));
