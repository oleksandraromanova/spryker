<?php

namespace Pyz\Yves\Willed\Controller;


use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Generated\Shared\Transfer\WilledTransfer;

/**
 * @method \Pyz\Client\Willed\WilledClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(Request $request)
    {
        $willedTransfer = new WilledTransfer();
        $willedTransfer->setOriginalString('delliw yllanemonehp ma I tub ,delliks yllanemonehp ton ma I');
        $willedTransfer = $this->getClient()->reverseString($willedTransfer);
        $data = ['reversedString' => $willedTransfer->getReversedString()];

        return $this->view(
            $data,
            [],
            '@Willed/views/index/index.twig'
        );
    }
}
