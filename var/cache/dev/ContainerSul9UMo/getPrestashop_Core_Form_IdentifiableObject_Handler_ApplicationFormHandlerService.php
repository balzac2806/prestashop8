<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.handler.application_form_handler' shared service.

return $this->services['prestashop.core.form.identifiable_object.handler.application_form_handler'] = ($this->services['prestashop.core.form.identifiable_object.handler.form_handler_factory'] ?? $this->load('getPrestashop_Core_Form_IdentifiableObject_Handler_FormHandlerFactoryService.php'))->create(($this->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataHandler\\ApplicationFormDataHandler'] ?? $this->load('getApplicationFormDataHandlerService.php')));
