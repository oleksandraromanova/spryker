<?php

namespace Pyz\Zed\Willed\Communication\Controller;

use Generated\Shared\Transfer\WilledTransfer;
use Pyz\Zed\Willed\Business\WilledFacadeInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method WilledFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @pararm WilledTransfer $willedTransfer
     *
     * @retrun WilledTransfer
     */
    public function reverseStringAction(WilledTransfer $willedTransfer): WilledTransfer
    {
        return $this->getFacade()->reverseString($willedTransfer);
    }
}
