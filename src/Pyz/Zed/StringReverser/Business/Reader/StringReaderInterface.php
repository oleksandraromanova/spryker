<?php

namespace Pyz\Zed\StringReverser\Business\Reader;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface StringReaderInterface
{
    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
