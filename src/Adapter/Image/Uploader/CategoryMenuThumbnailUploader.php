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

namespace PrestaShop\PrestaShop\Adapter\Image\Uploader;

use HelperImageUploader;
use ImageManager;
use PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface;
use PrestaShop\PrestaShop\Core\Category\Provider\MenuThumbnailAvailableKeyProvider;
use PrestaShop\PrestaShop\Core\Domain\Category\Exception\MenuThumbnailsLimitException;
use PrestaShop\PrestaShop\Core\Image\Uploader\Exception\ImageUploadException;
use PrestaShop\PrestaShop\Core\Image\Uploader\Exception\MemoryLimitException;
use PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class CategoryMenuThumbnailUploader.
 */
final class CategoryMenuThumbnailUploader extends AbstractImageUploader implements ImageUploaderInterface
{
    /**
     * @var CacheClearerInterface
     */
    private $cacheClearer;

    /**
     * @var MenuThumbnailAvailableKeyProvider
     */
    private $menuThumbnailAvailableKeyProvider;

    /**
     * @param CacheClearerInterface $cacheClearer
     * @param MenuThumbnailAvailableKeyProvider $menuThumbnailAvailableKeyProvider
     */
    public function __construct(
        CacheClearerInterface $cacheClearer,
        MenuThumbnailAvailableKeyProvider $menuThumbnailAvailableKeyProvider
    ) {
        $this->cacheClearer = $cacheClearer;
        $this->menuThumbnailAvailableKeyProvider = $menuThumbnailAvailableKeyProvider;
    }

    /**
     * {@inheritdoc}
     *
     * @throws ImageUploadException
     */
    public function upload($categoryId, UploadedFile $uploadedImage)
    {
        $this->checkImageIsAllowedForUpload($uploadedImage);

        $availableKeys = $this->menuThumbnailAvailableKeyProvider->getAvailableKeys($categoryId);

        // HelperImageUploader::process() expects
        // uploaded file to be available in $_FILES
        $_FILES['thumbnail'] = [
            'error' => [$uploadedImage->getError()],
            'name' => [$uploadedImage->getClientOriginalName()],
            'size' => [$uploadedImage->getSize()],
            'tmp_name' => [$uploadedImage->getPathname()],
            'type' => [$uploadedImage->getMimeType()],
        ];

        $helper = new HelperImageUploader('thumbnail');
        $uploadedFiles = $helper->process();

        if (count($availableKeys) < count($uploadedFiles)) {
            throw new MenuThumbnailsLimitException(sprintf('Maximum number of menu thumbnails was reached for category "%s"', $categoryId));
        }

        foreach ($uploadedFiles as &$uploadedFile) {
            $key = array_shift($availableKeys);

            // Evaluate the memory required to resize the image: if it's too much, you can't resize it.
            if (isset($uploadedFile['save_path']) && !ImageManager::checkImageMemoryLimit($uploadedFile['save_path'])) {
                throw new MemoryLimitException(sprintf('Cannot resize menu thumbnail for category with id "%s" due to reached memory limit.', $categoryId));
            }

            // Copy new image
            if (!isset($uploadedFile['save_path'])
                || !ImageManager::resize($uploadedFile['save_path'], _PS_CAT_IMG_DIR_ . $categoryId . '-' . $key . '_thumb.jpg')
            ) {
                throw new ImageUploadException('An error occurred while uploading the image.');
            }

            if (isset($uploadedFile['save_path']) && is_file($uploadedFile['save_path'])) {
                unlink($uploadedFile['save_path']);
            }

            // Necessary to prevent hacking
            if (isset($uploadedFile['save_path'])) {
                unset($uploadedFile['save_path']);
            }

            if (isset($uploadedFile['tmp_name'])) {
                unset($uploadedFile['tmp_name']);
            }
        }

        $this->cacheClearer->clear();
    }
}
