<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EPdd\Pdd\Rebate;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['rebate'] = function ($app) {
            return new Client($app);
        };
    }
}
