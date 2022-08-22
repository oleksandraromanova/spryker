<?php

namespace Pyz\Client\Willed;

use Spryker\Client\Kernel\AbstractClient;
use Generated\Shared\Transfer\WilledTransfer;

/**
 * @method WilledFactory getFactory()
 */
class WilledClient extends AbstractClient implements WilledClientInterface
{
    /**
     *{@inheritdoc }
     *
     * @api
     *
     * @pararm WilledTransfer $willedTransfer
     *
     * @retrun WilledTransfer
     */
    public function reverseString(WilledTransfer $willedTransfer): WilledTransfer
    {
        return $this->getFactory()
            ->createWilledZedStub()
            ->reverseString($willedTransfer);
    }
}
