<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.tax_inclusion' shared autowired service.

return $this->services['prestashop.core.form.choice_provider.tax_inclusion'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\TaxInclusionChoiceProvider(($this->services['translator'] ?? $this->getTranslatorService()));
