<?php

namespace Pyz\Zed\StringReverser\Business\Reverser;

//use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

interface StringReverserInterface
{
    /**
     * @param \Generated\Shared\Transfer\StringReverserTransfer $stringReverserTransfer
     *
     * @return \Generated\Shared\Transfer\StringReverserTransfer
     */
    public function reverse(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer;

//    /**
//     * @param HelloSprykerTransfer $helloSprykerTransfer
//     *
//     * @return HelloSprykerTransfer
//     */
//
//    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
