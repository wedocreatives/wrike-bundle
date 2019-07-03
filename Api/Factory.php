<?php

/*
 * This file is part of the wedocreatives/wrike-bundle package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace wedocreatives\Bundle\WrikeBundle\Api;

use wedocreatives\WrikePhpSdk\ApiFactory;

/**
 * Factory.
 */
class Factory
{
    /**
     * Create Api instance.
     *
     * @throws \InvalidArgumentException
     *
     * @return \wedocreatives\WrikePhpLibrary\Api
     */
    public static function create()
    {
        return ApiFactory::create();
    }

    /**
     * Create Api instance with access token.
     *
     * @param string $token
     *
     * @throws \InvalidArgumentException
     *
     * @return \wedocreatives\WrikePhpLibrary\Api
     */
    public static function createForPermanentToken($token)
    {
        return ApiFactory::create($token);
    }
}
