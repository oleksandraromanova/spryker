<?php

namespace Pyz\Client\Willed\Zed;

use Generated\Shared\Transfer\WilledTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class WilledZedStub implements WilledZedStubInterface
{
    /**
     * @var ZedRequestClientInterface
     */
    protected $zedRequestClient;

    /**
     * @pararm ZedRequestClientInterface $zedRequestClient
     */
    public function __construct(ZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param WilledTransfer $willedTransfer
     * @return WilledTransfer
     */
    public function reverseString(WilledTransfer $willedTransfer): WilledTransfer
    {
        /**
         * @var WilledTransfer $willedTransfer
         */
        $willedTransfer = $this->zedRequestClient->call('/willed/gateway/reverse-string', $willedTransfer);
        return $willedTransfer;
    }
}
