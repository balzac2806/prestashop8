<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace PrestaShopBundle\Form\Admin\Feature;

use PrestaShopBundle\Form\Admin\Type\CommonAbstractType;
use PrestaShopBundle\Form\Admin\Type\TranslateType;
use PrestaShopBundle\Form\FormHelper;
use Symfony\Component\Form\Extension\Core\Type as FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

/**
 * This Class is responsible to generate the product Features form.
 */
class ProductFeature extends CommonAbstractType
{
    private $featureDataProvider;
    private $translator;
    private $locales;
    private $router;
    private $features;

    /**
     * Constructor.
     *
     * @param object $translator
     * @param object $legacyContext
     * @param object $router
     * @param object $featureDataProvider
     */
    public function __construct($translator, $legacyContext, $router, $featureDataProvider)
    {
        $this->translator = $translator;
        $this->locales = $legacyContext->getLanguages();
        $this->router = $router;
        $this->featureDataProvider = $featureDataProvider;
        $this->features = FormHelper::formatDataChoicesList(
            $this->featureDataProvider->getFeatures($this->locales[0]['id_lang']),
            'id_feature'
        );
    }

    /**
     * {@inheritdoc}
     *
     * Builds form
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('feature', FormType\ChoiceType::class, [
            'label' => $this->translator->trans('Feature', [], 'Admin.Catalog.Feature'),
            'choices' => $this->features,
            'required' => false,
            'autocomplete' => true,
            'attr' => [
                'data-action' => $this->router->generate('admin_feature_get_feature_values', ['idFeature' => 1]),
                'class' => 'feature-selector',
            ],
            'placeholder' => $this->translator->trans('Choose a feature', [], 'Admin.Catalog.Feature'),
        ])
            ->add('value', FormType\ChoiceType::class, [
                'label' => $this->translator->trans('Pre-defined value', [], 'Admin.Catalog.Feature'),
                'required' => false,
                'autocomplete' => true,
                'placeholder' => $this->translator->trans('Choose a value', [], 'Admin.Catalog.Feature'),
                'disabled' => true,
            ])
            ->add('custom_value', TranslateType::class, [
                'type' => FormType\TextType::class,
                'options' => [],
                'locales' => $this->locales,
                'hideTabs' => true,
                'required' => false,
                'label' => $this->translator->trans('OR Customized value', [], 'Admin.Catalog.Feature'),
            ]);

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();

            if (!$data || !$data['feature'] || $data['custom_value']) {
                return;
            }

            $choices = FormHelper::formatDataChoicesList(
                $this->featureDataProvider->getFeatureValuesWithLang($this->locales[0]['id_lang'], $data['feature']),
                'id_feature_value',
                'value'
            );

            $this->updateValueField($form, $choices);
        });

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            $form = $event->getForm();

            if (empty($data['value'])) {
                return;
            }

            $choices = FormHelper::formatDataChoicesList(
                $this->featureDataProvider->getFeatureValuesWithLang($this->locales[0]['id_lang'], $data['feature']),
                'id_feature_value',
                'value'
            );

            $this->updateValueField($form, $choices);
        });
    }

    /**
     * @param FormInterface $form
     * @param array $choices
     */
    private function updateValueField(FormInterface $form, array $choices)
    {
        $form->add('value', FormType\ChoiceType::class, [
            'label' => $this->translator->trans('Pre-defined value', [], 'Admin.Catalog.Feature'),
            'required' => false,
            'autocomplete' => true,
            'attr' => [
                'class' => 'feature-value-selector',
            ],
            'choices' => $choices,
            'placeholder' => $this->translator->trans('Choose a value', [], 'Admin.Catalog.Feature'),
        ]);
    }

    /**
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
        return 'product_feature';
    }
}
