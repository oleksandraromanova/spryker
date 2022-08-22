<?php

namespace Pyz\Zed\Willed\Business;

use Pyz\Zed\Willed\Business\Reverser\StringReverser;
use Pyz\Zed\Willed\Business\Reverser\StringReverserInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class WilledBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return StringReverserInterface
     */
    public function createStringReverser(): StringReverserInterface
    {
        return new StringReverser();
    }
}
