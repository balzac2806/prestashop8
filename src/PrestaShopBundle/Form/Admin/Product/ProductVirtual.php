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

namespace PrestaShopBundle\Form\Admin\Product;

use PrestaShop\PrestaShop\Core\ConfigurationInterface;
use PrestaShopBundle\Form\Admin\Type\CommonAbstractType;
use PrestaShopBundle\Form\Admin\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type as FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the virtual product.
 */
class ProductVirtual extends CommonAbstractType
{
    private $translator;
    /**
     * @var ConfigurationInterface
     */
    private $configuration;

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator
     * @param ConfigurationInterface $configuration
     */
    public function __construct(TranslatorInterface $translator, ConfigurationInterface $configuration)
    {
        $this->translator = $translator;
        $this->configuration = $configuration;
    }

    /**
     * {@inheritdoc}
     *
     * Builds form
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'is_virtual_file',
            FormType\ChoiceType::class,
            [
                'choices' => [
                    $this->translator->trans('Yes', [], 'Admin.Global') => 1,
                    $this->translator->trans('No', [], 'Admin.Global') => 0,
                ],
                'expanded' => true,
                'required' => true,
                'multiple' => false,
            ]
        )
            ->add(
                'file',
                FormType\FileType::class,
                [
                    'required' => false,
                    'label' => $this->translator->trans('File', [], 'Admin.Global'),
                    'constraints' => [
                        new Assert\File(['maxSize' => $this->configuration->get('PS_ATTACHMENT_MAXIMUM_SIZE') . 'M']),
                    ],
                ]
            )
            ->add(
                'name',
                FormType\TextType::class,
                [
                    'label' => $this->translator->trans('Filename', [], 'Admin.Global'),
                    'constraints' => [
                        new Assert\NotBlank(),
                    ],
                ]
            )
            ->add(
                'nb_downloadable',
                FormType\NumberType::class,
                [
                    'label' => $this->translator->trans('Number of allowed downloads', [], 'Admin.Catalog.Feature'),
                    'required' => false,
                    'constraints' => [
                        new Assert\Type(['type' => 'numeric']),
                    ],
                ]
            )
            ->add(
                'expiration_date',
                DatePickerType::class,
                [
                    'label' => $this->translator->trans('Expiration date', [], 'Admin.Catalog.Feature'),
                    'required' => false,
                    'attr' => ['placeholder' => 'YYYY-MM-DD'],
                ]
            )
            ->add(
                'nb_days',
                FormType\NumberType::class,
                [
                    'label' => $this->translator->trans('Number of days', [], 'Admin.Catalog.Feature'),
                    'required' => false,
                    'constraints' => [
                        new Assert\Type(['type' => 'numeric']),
                    ],
                ]
            )
            ->add(
                'save',
                FormType\ButtonType::class,
                [
                    'label' => $this->translator->trans('Save', [], 'Admin.Actions'),
                    'attr' => ['class' => 'btn-primary pull-right'],
                ]
            );

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();

            //if this partial form is submit from a parent form, disable it
            if ($form->getParent()) {
                $event->setData([]);
                $form->add('name', FormType\TextType::class, ['mapped' => false]);
            } elseif ($data['is_virtual_file'] == 0) {
                //disable name mapping when is virtual not defined to yes
                $form->add('name', FormType\TextType::class, ['mapped' => false]);
            }
        });
    }

    /**
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
        return 'product_virtual';
    }
}
