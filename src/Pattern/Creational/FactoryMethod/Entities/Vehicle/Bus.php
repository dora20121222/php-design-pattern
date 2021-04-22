<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) lawyersoa <business@lawyersoa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDesignPattern\Pattern\Creational\FactoryMethod\Entities\Vehicle;

use PHPDesignPattern\Pattern\Creational\FactoryMethod\Abstracts\Vehicle;

class Bus extends Vehicle
{
    protected $name = '公共汽车';

    protected $voice = '嘟嘟嘟～';
}