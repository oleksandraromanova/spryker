<?php

namespace Pyz\Zed\Willed\Business;

use Generated\Shared\Transfer\WilledTransfer;

interface WilledFacadeInterface
{
    /**
     * Specification:
     * - Reverses string.
     *
     * @api
     *
     * @param WilledTransfer $willedTransfer
     *
     * @return WilledTransfer
     */
    public function reverseString(WilledTransfer $willedTransfer): WilledTransfer;
}

