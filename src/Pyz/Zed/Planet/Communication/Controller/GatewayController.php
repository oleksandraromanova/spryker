<?php

namespace Pyz\Zed\Planet\Communication\Controller;

use Generated\Shared\Transfer\PlanetCollectionTransfer;
use Pyz\Zed\Planet\Business\PlanetFacadeInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method PlanetFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param PlanetCollectionTransfer $planetCollectionTransfer
     *
     * @return PlanetCollectionTransfer
     *
     * @throws \Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getPlanetCollectionAction(PlanetCollectionTransfer $planetCollectionTransfer): PlanetCollectionTransfer
    {
        //return $this->getFacade()->getAllPlanetEntity
    }
}
