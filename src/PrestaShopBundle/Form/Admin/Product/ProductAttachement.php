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
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the product attachments.
 */
class ProductAttachement extends CommonAbstractType
{
    private $translator;
    private $configuration;

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
        $builder->add('file', FileType::class, [
            'required' => false,
            'label' => $this->translator->trans('File', [], 'Admin.Global'),
            'constraints' => [
                new Assert\NotNull(['message' => $this->translator->trans('Please select a file', [], 'Admin.Catalog.Feature')]),
                new Assert\File(['maxSize' => $this->configuration->get('PS_ATTACHMENT_MAXIMUM_SIZE') . 'M']),
            ],
        ])
            ->add('name', TextType::class, [
                'label' => $this->translator->trans('Filename', [], 'Admin.Global'),
                'attr' => ['placeholder' => $this->translator->trans('Title', [], 'Admin.Global')],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['min' => 2]),
                ],
            ])
            ->add('description', TextType::class, [
                'label' => $this->translator->trans('Description', [], 'Admin.Global'),
                'attr' => ['placeholder' => $this->translator->trans('Description', [], 'Admin.Global')],
                'empty_data' => '',
            ])
            ->add('add', ButtonType::class, [
                'label' => $this->translator->trans('Add', [], 'Admin.Actions'),
                'attr' => ['class' => 'btn-outline-primary pull-right'],
            ])
            ->add('cancel', ButtonType::class, [
                'label' => $this->translator->trans('Cancel', [], 'Admin.Actions'),
                'attr' => ['class' => 'btn-outline-secondary pull-right mr-2', 'data-toggle' => 'collapse', 'data-target' => '#collapsedForm'],
            ]);

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();

            //if this partial form is submit from a parent form, disable it
            if ($form->getParent()) {
                $event->setData([]);
                $form->add('file', FileType::class, ['mapped' => false]);
                $form->add('name', TextType::class, ['mapped' => false]);
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
        return 'product_attachment';
    }
}
