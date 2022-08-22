<?php

namespace Pyz\Client\Willed;

use Generated\Shared\Transfer\WilledTransfer;

interface WilledClientInterface
{
    /**
     * Specification:
     * - Does Zed call.
     * - Reverses string.
     *
     * @api
     *
     * @pararm WilledTransfer $willedTransfer
     *
     * @retrun WilledTransfer
     */
    public function reverseString(WilledTransfer $willedTransfer) : WilledTransfer;
}
