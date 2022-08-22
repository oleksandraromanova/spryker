<?php

namespace Pyz\Client\Willed\Zed;

use Generated\Shared\Transfer\WilledTransfer;

interface WilledZedStubInterface
{
    /**
     * @pararm WilledTransfer $willedTransfer
     *
     * @retrun WilledTransfer
     */
    public function reverseString(WilledTransfer $willedTransfer) : WilledTransfer;

}
