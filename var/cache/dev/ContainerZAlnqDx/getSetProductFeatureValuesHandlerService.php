<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\FeatureValue\CommandHandler\SetProductFeatureValuesHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\FeatureValue\\CommandHandler\\SetProductFeatureValuesHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\FeatureValue\CommandHandler\SetProductFeatureValuesHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\FeatureValue\\Update\\ProductFeatureValueUpdater'] ?? $this->load('getProductFeatureValueUpdaterService.php')));
