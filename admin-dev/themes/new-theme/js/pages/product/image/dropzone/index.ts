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
import {createApp, App} from 'vue';
import {createI18n} from 'vue-i18n';
import ReplaceFormatter from '@PSVue/plugins/vue-i18n/replace-formatter';
import Dropzone from './Dropzone.vue';

export default function initDropzone(imagesContainerSelector: string): App {
  const container = <HTMLElement>document.querySelector(imagesContainerSelector);

  const translations = JSON.parse(<string>container.dataset.translations);
  const i18n = createI18n({
    locale: 'en',
    formatter: new ReplaceFormatter(),
    messages: {en: translations},
  });

  const productId = Number(container.dataset.productId);
  const locales = JSON.parse(<string>container.dataset.locales);

  const vueApp = createApp(Dropzone, {
    el: imagesContainerSelector,
    template: '<dropzone :productId=productId :locales=locales :token=token :formName=formName />',
    i18n,
    locales,
    productId,
    shopId: Number(container.dataset.shopId),
    isMultiStoreActive: !!Number(container.dataset.isMultiStoreActive),
    token: container.dataset.token,
    formName: container.dataset.formName,
  }).use(i18n);

  vueApp.mount(imagesContainerSelector);

  return vueApp;
}
