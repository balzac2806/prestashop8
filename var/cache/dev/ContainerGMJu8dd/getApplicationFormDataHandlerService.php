<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\ApplicationFormDataHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataHandler\\ApplicationFormDataHandler'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\ApplicationFormDataHandler(($this->services['prestashop.core.command_bus'] ?? $this->load('getPrestashop_Core_CommandBusService.php')));
