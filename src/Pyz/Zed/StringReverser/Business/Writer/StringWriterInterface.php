<?php

namespace Pyz\Zed\StringReverser\Business\Writer;

use Generated\Shared\Transfer\HelloSprykerTransfer;

interface StringWriterInterface
{
    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
