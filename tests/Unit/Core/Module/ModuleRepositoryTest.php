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

declare(strict_types=1);

namespace Tests\Unit\Core\Module;

use Doctrine\Common\Cache\CacheProvider;
use PHPUnit\Framework\TestCase;
use PrestaShop\PrestaShop\Adapter\HookManager;
use PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider;
use PrestaShop\PrestaShop\Adapter\Module\Module;
use PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider;
use PrestaShop\PrestaShop\Core\Module\ModuleRepository;
use Symfony\Component\HttpFoundation\ParameterBag;

class ModuleRepositoryTest extends TestCase
{
    private const INSTALLED_MODULES = [
        'bankwire',
        'demo',
        'ps_banner',
    ];

    private const UPGRADABLE_MODULES = [
        'bankwire',
        'demo',
    ];

    private const CONFIGURABLE_MODULES = [
        'ps_banner',
    ];

    /** @var ModuleRepository */
    private $moduleRepository;

    public function setUp(): void
    {
        $this->moduleRepository = $this->getMockBuilder(ModuleRepository::class)
            ->setConstructorArgs([
                $this->createMock(ModuleDataProvider::class),
                $this->createMock(AdminModuleDataProvider::class),
                $this->createMock(CacheProvider::class),
                $this->createMock(HookManager::class),
                __DIR__ . '/../../../Resources/modules',
            ])
            ->onlyMethods(['getModule'])
            ->getMock()
        ;
        $this->moduleRepository->method('getModule')->willReturnCallback(function ($arg) {
            $module = $this->createMock(Module::class);
            $module->database = new ParameterBag([
                'installed' => in_array($arg, self::INSTALLED_MODULES),
            ]);
            $moduleInstance = $this->createMock(\Module::class);
            $moduleInstance->warning = 'Configurable warning';
            $module->method('getInstance')->willReturn($moduleInstance);
            $module->method('canBeUpgraded')->willReturn(in_array($arg, self::UPGRADABLE_MODULES));
            $module->method('hasValidInstance')->willReturn(in_array($arg, self::CONFIGURABLE_MODULES));

            return $module;
        });
    }

    public function testGetList(): void
    {
        $this->assertCount(10, $this->moduleRepository->getList());
    }

    public function testGetInstalledModules(): void
    {
        $this->assertCount(count(self::INSTALLED_MODULES), $this->moduleRepository->getInstalledModules());
    }

    public function testGetUpgradableModules(): void
    {
        $this->assertCount(count(self::UPGRADABLE_MODULES), $this->moduleRepository->getUpgradableModules());
    }

    public function testGetConfigurableModules(): void
    {
        $this->assertCount(count(self::CONFIGURABLE_MODULES), $this->moduleRepository->getConfigurableModules());
    }

    public function testGetModulePath(): void
    {
        $this->assertEquals(
            __DIR__ . '/../../../Resources/modules/bankwire',
            $this->moduleRepository->getModulePath('bankwire')
        );
        $this->assertNull($this->moduleRepository->getModulePath('no-existing-module'));
    }
}
