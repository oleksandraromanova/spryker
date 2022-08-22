<?php

namespace Pyz\Zed\StringReverser\Business\Reverser;

//use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;


class StringReverser implements StringReverserInterface
{
    /**
     * @param \Generated\Shared\Transfer\StringReverserTransfer $stringReverserTransfer
     *
     * @return \Generated\Shared\Transfer\StringReverserTransfer
     */
    public function reverse(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer
    {
        $reversedString = strrev($stringReverserTransfer->getOriginalString());
        $stringReverserTransfer->setReversedString($reversedString);

        return $stringReverserTransfer;
    }

//    /**
//     * @param HelloSprykerTransfer $helloSprykerTransfer
//     *
//     * @return HelloSprykerTransfer
//     */
//    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
//    {
//        $reversedString = strrev($helloSprykerTransfer->getOriginalString());
//        $helloSprykerTransfer->setReversedString($reversedString);
//
//        return $helloSprykerTransfer;
//    }
}
