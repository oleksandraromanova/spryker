<?php

namespace Pyz\Zed\Planet\Business;

use Generated\Shared\Transfer\PlanetCollectionTransfer;
use Generated\Shared\Transfer\PlanetTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method PlanetBusinessFactory getFactory()
 */
class PlanetFacade extends AbstractFacade implements PlanetFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @param PlanetTransfer $planetTransfer
     *
     * @return PlanetTransfer
     * @api
     *
     */

    public function savePlanet(PlanetTransfer $planetTransfer): PlanetTransfer
    {
        return $this->getFactory()
            ->createPlanetSaver()
            ->save($planetTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @param int $idPlanet
     *
     * @return PlanetTransfer|null
     * @api
     *
     */

    public function findPlanetById(int $idPlanet): ?PlanetTransfer
    {
        return $this->getFactory()
            ->createPlanetReader()
            ->findPlanetById($idPlanet);
    }

    /**
     * @param PlanetCollectionTransfer $planetCollectionTransfer
     * @return PlanetCollectionTransfer|null
     */
    public function getPlanetCollection(PlanetCollectionTransfer $planetCollectionTransfer): ?PlanetCollectionTransfer
    {

    }

}
