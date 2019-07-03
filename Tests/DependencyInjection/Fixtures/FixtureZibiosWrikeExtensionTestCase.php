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

use Symfony\Component\DependencyInjection\ContainerBuilder;
use wedocreatives\Bundle\WrikeBundle\DependencyInjection\wedocreativesWrikeExtension;
use wedocreatives\Bundle\WrikeBundle\Tests\TestCase;

/**
 * Fixture wedocreativesWrikeExtension Test Case.
 */
abstract class FixturewedocreativesWrikeExtensionTestCase extends TestCase
{
    public function testEmptyConfig()
    {
        $container = $this->getContainer('empty');

        self::assertFalse($container->hasParameter('wedocreatives_wrike'), json_encode($container->getParameterBag()));
    }

    public function testDefaultConfig()
    {
        $container = $this->getContainer('default');

        $expectedConfiguration = [];
        self::assertTrue($container->hasParameter('wedocreatives_wrike'), json_encode($container->getParameterBag()));
        self::assertEquals($expectedConfiguration, $container->getParameter('wedocreatives_wrike'));
    }

    public function testBaseConfig()
    {
        $container = $this->getContainer('base');

        $expectedConfiguration = [
            'permanent_tokens' => [
                'tokens' => [
                    'first' => 'firstToken',
                    'second' => 'secondToken',
                ],
                'default_token' => 'first',
            ],
            'api_url' => 'http://urlApi',
        ];
        self::assertTrue($container->hasParameter('wedocreatives_wrike'), json_encode($container->getParameterBag()));
        self::assertEquals($expectedConfiguration, $container->getParameter('wedocreatives_wrike'));
    }

    public function testLoadWithOverwriting()
    {
        $container = $this->getContainer('overwriting');

        $expectedConfiguration = [
            'permanent_tokens' => [
                'tokens' => [
                    'first' => 'firstToken',
                    'second' => 'secondToken',
                    'third' => 'thirdToken',
                ],
                'default_token' => 'third',
            ],
            'api_url' => 'https://urlOverwritten',
        ];
        self::assertTrue($container->hasParameter('wedocreatives_wrike'));
        self::assertEquals($expectedConfiguration, $container->getParameter('wedocreatives_wrike'));
    }

    /**
     * @param string $fixture
     *
     * @return ContainerBuilder
     */
    protected function getContainer($fixture)
    {
        $container = new ContainerBuilder();
        $container->registerExtension(new wedocreativesWrikeExtension());
        $this->loadFixture($container, $fixture);
        $container->compile();

        return $container;
    }

    /**
     * @param ContainerBuilder $container
     * @param string           $fixture
     */
    abstract protected function loadFixture(ContainerBuilder $container, $fixture);
}
