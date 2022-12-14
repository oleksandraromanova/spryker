<?php

namespace Pyz\Zed\StringReverser\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;
//use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;

/**
 * @method \Pyz\Zed\StringReverser\Business\StringReverserBusinessFactory getFactory()
 */
class StringReverserFacade extends AbstractFacade implements StringReverserFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\StringReverserTransfer $stringReverserTransfer
     *
     * @return \Generated\Shared\Transfer\StringReverserTransfer
     */
    public function reverseString(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverse($stringReverserTransfer);
    }
}

///**
// * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerBusinessFactory getFactory()
// * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerEntityManagerInterface getEntityManager()
// * @method \Pyz\Zed\HelloSpryker\Persistence\HelloSprykerRepositoryInterface getRepository()
// */
//class StringReverserFacade extends AbstractFacade implements StringReverserFacadeInterface
//{
//    /**
//     * {@inheritDoc}
//     *
//     * @param HelloSprykerTransfer $helloSprykerTransfer
//     *
//     * @return HelloSprykerTransfer
//     * @api
//     *
//     */
//    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
//    {
//        return $this->getFactory()
//            ->createStringReverser()
//            ->reverseString($helloSprykerTransfer);
//    }
//
//    /**
//     * @inheritDoc
//     *
//     * @param HelloSprykerTransfer $helloSprykerTransfer
//     *
//     * @return HelloSprykerTransfer
//     * @api
//     *
//     */
//    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
//    {
//        return $this->getFactory()->createStringWriter()->createHelloSprykerEntity($helloSprykerTransfer);
//    }
//
//    /**
//     * @inheritDoc
//     *
//     * @param HelloSprykerTransfer $helloSprykerTransfer
//     *
//     * @return HelloSprykerTransfer
//     * @api
//     *
//     */
//    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
//    {
//        return $this->getFactory()->createStringReader()->findHelloSpryker($helloSprykerTransfer);
//    }
//
//}
