<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.attachment.query_handler.get_attachment_information_handler' shared service.

return $this->services['prestashop.adapter.attachment.query_handler.get_attachment_information_handler'] = new \PrestaShop\PrestaShop\Adapter\Attachment\QueryHandler\GetAttachmentInformationHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Attachment\\AttachmentRepository'] ?? $this->load('getAttachmentRepositoryService.php')));
