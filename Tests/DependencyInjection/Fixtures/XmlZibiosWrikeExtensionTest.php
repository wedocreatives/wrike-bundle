<?php

/*
 * This file is part of the wedocreatives/wrike-bundle package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace wedocreatives\Bundle\WrikeBundle\Tests\DependencyInjection\Fixtures;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * XmlwedocreativesWrikeExtensionTest.
 */
class XmlwedocreativesWrikeExtensionTest extends FixturewedocreativesWrikeExtensionTestCase
{
    /**
     * @param ContainerBuilder $container
     * @param string           $fixture
     */
    protected function loadFixture(ContainerBuilder $container, $fixture)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/xml'));
        $loader->load($fixture . '.xml');
    }
}
