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

namespace PrestaShopBundle\Service\DataUpdater\Admin;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Data updater for new Architecture, about Product object model.
 *
 * This class will provide data from DB / ORM about Products for the Admin interface.
 */
interface ProductInterface
{
    /**
     * Activate or deactivate a list of products.
     *
     * @param array $productListId The ID list of products to (de)activate
     * @param bool $activate true to activate, false to deactivate
     *
     * @throws \PrestaShopBundle\Exception\UpdateProductException If an error occured during update (not really blocking since its just activation flag)
     *
     * @return bool true when succeed
     */
    public function activateProductIdList(array $productListId, $activate = true);

    /**
     * Do a safe delete on given product IDs.
     *
     * @param array $productIdList The ID list of products to delete
     *
     * @throws \PrestaShopBundle\Exception\UpdateProductException If deletion failed (some normal cases can brings this, it's not a Development error)
     *
     * @return bool true when succeed
     */
    public function deleteProductIdList(array $productIdList);

    /**
     * Duplicates the given product IDs.
     *
     * @param array $productIdList The ID list of products to delete
     *
     * @throws \PrestaShopBundle\Exception\UpdateProductException if duplication failed
     *
     * @return bool true when succeed
     */
    public function duplicateProductIdList(array $productIdList);

    /**
     * Do a safe delete on given product ID.
     *
     * @param int $productId The product ID to delete
     *
     * @throws \PrestaShopBundle\Exception\UpdateProductException If deletion failed (some normal cases can brings this, it's not a Development error)
     *
     * @return bool
     */
    public function deleteProduct($productId);

    /**
     * Duplicates the given product, and returns the new ID.
     *
     * Code comes from Legacy controller!
     *
     * @param int $productId The product ID to duplicate
     *
     * @return int The new product ID (duplicate)
     */
    public function duplicateProduct($productId);

    /**
     * Do a sort on a page of products.
     *
     * Since the sort can be partial (only one page, with offset and limit), we MUST sort only the given IDs,
     * and keep the others safely sorted without any functional change (even if we can bulk shift positions to fix gaps and duplicates).
     *
     * @param array $productList the list of products to sort (keys: ID, values: old positions) The natural order of the array is the new order to update
     * @param array $filterParams Contains the ID of the category to sort. Take it from AdminProductDataProvider::getPersistedFilterParameters().
     *
     * @throws \PrestaShopBundle\Exception\UpdateProductException If deletion failed (some normal cases can brings this, it's not a Development error)
     *
     * @return bool true when succeed
     */
    public function sortProductIdList(array $productList, $filterParams);
}
