<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'api_platform.action.exception' shared service.

return $this->services['api_platform.action.exception'] = new \ApiPlatform\Action\ExceptionAction(($this->services['serializer'] ?? $this->getSerializerService()), $this->parameters['api_platform.error_formats'], $this->parameters['api_platform.exception_to_status'], ($this->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService()));
