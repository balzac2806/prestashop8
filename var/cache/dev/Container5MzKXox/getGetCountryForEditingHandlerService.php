<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Country\QueryHandler\GetCountryForEditingHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Country\\QueryHandler\\GetCountryForEditingHandler'] = new \PrestaShop\PrestaShop\Adapter\Country\QueryHandler\GetCountryForEditingHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Country\\Repository\\CountryRepository'] ?? $this->load('getCountryRepositoryService.php')));
