<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\TitleFormDataProvider' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataProvider\\TitleFormDataProvider'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\TitleFormDataProvider(($this->services['prestashop.core.query_bus'] ?? $this->load('getPrestashop_Core_QueryBusService.php')));
