<?php

/*
 * This file is part of the wedocreatives/wrike-bundle package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace wedocreatives\Bundle\WrikeBundle\Tests\Api;

use wedocreatives\Bundle\WrikeBundle\Api\Factory;
use wedocreatives\Bundle\WrikeBundle\Tests\TestCase;
use wedocreatives\WrikePhpLibrary\Api;

/**
 * FactoryTest.
 */
class FactoryTest extends TestCase
{
    public function test_create()
    {
        $api = Factory::create();
        self::assertInstanceOf(Api::class, $api);
    }

    public function test_createForPermanentToken()
    {
        $token = 'TestToken';
        $api = Factory::createForPermanentToken($token);
        self::assertInstanceOf(Api::class, $api);
    }
}
