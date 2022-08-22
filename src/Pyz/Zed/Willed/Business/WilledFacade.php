<?php

namespace Pyz\Zed\Willed\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;
use Generated\Shared\Transfer\WilledTransfer;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerBusinessFactory getFactory()
 */
class WilledFacade extends AbstractFacade implements WilledFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param WilledTransfer $willedTransfer
     *
     * @return WilledTransfer
     */
    public function reverseString(WilledTransfer $willedTransfer): WilledTransfer
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($willedTransfer);
    }
}
