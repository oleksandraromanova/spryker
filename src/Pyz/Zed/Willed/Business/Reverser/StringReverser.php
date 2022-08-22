<?php

namespace Pyz\Zed\Willed\Business\Reverser;

use Generated\Shared\Transfer\WilledTransfer;

class StringReverser implements StringReverserInterface
{
    /**
     * @param WilledTransfer $willedTransfer;
     *
     * @return WilledTransfer
     */
    public function reverseString(WilledTransfer $willedTransfer): WilledTransfer
    {
        $reversedString = strrev($willedTransfer->getOriginalString());
        $willedTransfer->setReversedString($reversedString);

        return $willedTransfer;
    }
}
