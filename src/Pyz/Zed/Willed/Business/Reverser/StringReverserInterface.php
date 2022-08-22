<?php

namespace Pyz\Zed\Willed\Business\Reverser;

use Generated\Shared\Transfer\WilledTransfer;

interface StringReverserInterface
{
    /**
     * @param WilledTransfer $willedTransfer
     *
     * @return WilledTransfer
     */
    public function reverseString(WilledTransfer $willedTransfer): WilledTransfer;
}

