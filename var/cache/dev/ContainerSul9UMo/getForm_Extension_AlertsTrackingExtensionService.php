<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.extension.alerts_tracking_extension' shared autowired service.

return $this->services['form.extension.alerts_tracking_extension'] = new \PrestaShopBundle\Form\Extension\AlertsTrackingExtension(($this->services['session'] ?? $this->getSessionService())->getFlashBag());
