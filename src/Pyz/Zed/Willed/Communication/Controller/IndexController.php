<?php

namespace Pyz\Zed\Willed\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Generated\Shared\Transfer\WilledTransfer;

/**
 * @method \Pyz\Zed\Willed\Business\WilledFacadeInterface getFacade()
 */
class IndexController extends AbstractController
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function indexAction(Request $request): array
    {

        $willedTransfer = new WilledTransfer();
        $willedTransfer->setOriginalString('delliw yllanemonehp ma I tub ,delliks yllanemonehp ton ma I');
        $willedTransfer = $this->getFacade()->reverseString($willedTransfer);
        return ['string' => $willedTransfer->getReversedString()];

    }
}
