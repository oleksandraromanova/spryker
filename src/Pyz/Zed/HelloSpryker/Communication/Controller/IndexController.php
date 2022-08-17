<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Pyz\Zed\HelloSpryker\Business\HelloSprykerFacadeInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method HelloSprykerFacadeInterface getFacade()
 */
class IndexController extends AbstractController
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function indexAction(Request $request)
    {
        $helloSprykerTransfer = new HelloSprykerTransfer();
        $helloSprykerTransfer->setOriginalString("Hello Spryker!");

        $helloSprykerTransfer = $this->getFacade()->reverseString($helloSprykerTransfer);

        // Create new row in DB.
        $helloSprykerTransfer = $this->getFacade()->createHelloSprykerEntity($helloSprykerTransfer);

        // Retrieve data from DB.
        $helloSprykerTransfer = $this->getFacade()->findHelloSpryker($helloSprykerTransfer);


        return ['string' => $helloSprykerTransfer->getReversedString()];
    }
}
