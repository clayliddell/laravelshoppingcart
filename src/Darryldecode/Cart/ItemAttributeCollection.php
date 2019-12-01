<?php

/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 1/17/2015
 * Time: 12:03 PM
 */

namespace Darryldecode\Cart;

use Illuminate\Support\Collection;

class ItemAttributeCollection extends Collection
{
    public function __get($name)
    {
        return $this->has($name) ? $this->get($name) : null;
    }
}
