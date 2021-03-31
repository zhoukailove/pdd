<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EPdd\Pdd;

use EPdd\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property \EPdd\Pdd\Item\Client               $item
 * @property \EPdd\Pdd\Shop\Client               $shop
 * @property \EPdd\Pdd\Rebate\Client             $rebate
 * @property \EPdd\Pdd\Uatm\Client               $uatm
 * @property \EPdd\Pdd\Ju\Client                 $ju
 * @property \EPdd\Pdd\Spread\Client             $spread
 * @property \EPdd\Pdd\Dg\Client                 $dg
 * @property \EPdd\Pdd\Coupon\Client             $coupon
 * @property \EPdd\Pdd\Tpwd\Client               $tpwd
 * @property \EPdd\Pdd\Content\Client            $content
 * @property \EPdd\Pdd\Sc\Client                 $sc
 * @property \EPdd\Pdd\Order\Client              $order
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Item\ServiceProvider::class,
        Shop\ServiceProvider::class,
        Rebate\ServiceProvider::class,
        Uatm\ServiceProvider::class,
        Ju\ServiceProvider::class,
        Spread\ServiceProvider::class,
        Dg\ServiceProvider::class,
        Coupon\ServiceProvider::class,
        Tpwd\ServiceProvider::class,
        Content\ServiceProvider::class,
        Sc\ServiceProvider::class,
        Order\ServiceProvider::class,
    ];
}
