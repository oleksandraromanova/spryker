<?php

namespace Pyz\Zed\StringReverser\Business;

//use Generated\Shared\Transfer\HelloSprykerTransfer;
use Generated\Shared\Transfer\StringReverserTransfer;


interface StringReverserFacadeInterface
{
    /**
     * Specification:
     * - Reverses string.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\StringReverserTransfer $stringReverserTransfer
     *
     * @return \Generated\Shared\Transfer\StringReverserTransfer
     */
    public function reverseString(StringReverserTransfer $stringReverserTransfer): StringReverserTransfer;

//    /**
//     * Specification:
//     * - Reverses string.
//     *
//     * @param HelloSprykerTransfer $helloSprykerTransfer
//     *
//     * @return HelloSprykerTransfer
//     * @api
//     *
//     */
//    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
//
//    /**
//     * Specification:
//     * - Creates a database record
//     *
//     * @param HelloSprykerTransfer $helloSprykerTransfer
//     *
//     * @return HelloSprykerTransfer
//     * @api
//     *
//     */
//    public function createHelloSprykerEntity(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
//
//    /**
//     * Specification:
//     * - Finds a record in database
//     *
//     * @param HelloSprykerTransfer $helloSprykerTransfer
//     *
//     * @return HelloSprykerTransfer
//     * @api
//     *
//     */
//    public function findHelloSpryker(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;

}
