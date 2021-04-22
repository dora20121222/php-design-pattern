<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\FactoryMethod;

use PHPDesignPattern\Pattern\Creational\FactoryMethod\Entities\Vehicle\Truck;
use PHPDesignPattern\Pattern\Creational\FactoryMethod\Abstracts\FactoryMethod;

class TruckFactory extends FactoryMethod
{
    /**
     * 生产汽车
     *
     * @return Truck
     */
    public static function manufacture()
    {
        return new Truck();
    }
}
