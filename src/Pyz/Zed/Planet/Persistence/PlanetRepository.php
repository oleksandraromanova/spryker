<?php

namespace Pyz\Zed\Planet\Persistence;

use Generated\Shared\Transfer\PlanetTransfer;
use Orm\Zed\Planet\Persistence\PyzPlanet;
use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;
use Generated\Shared\Transfer\PlanetCollectionTransfer;

class PlanetRepository extends AbstractRepository implements PlanetRepositoryInterface
{
    /**
     * @param int $idPlanet
     *
     * @return PlanetTransfer|null
     */

    public function findPlanetById(int $idPlanet): ?PlanetTransfer
    {
        $planetEntity = $this->createPyzPlanetQuery()
            ->findOneByIdPlanet($idPlanet);

        if (!$planetEntity) {
            return null;
        }

        return $this->mapEntityToTransfer($planetEntity);
    }

    /**
     * @return PyzPlanetQuery
     */

    private function createPyzPlanetQuery(): PyzPlanetQuery
    {
        return PyzPlanetQuery::create();
    }

    /**
     * @param PyzPlanet $planetEntity
     *
     * @return PlanetTransfer
     */

    private function mapEntityToTransfer(PyzPlanet $planetEntity): PlanetTransfer
    {
        return (new PlanetTransfer())->fromArray($planetEntity->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\PlanetCollectionTransfer $planetsRestApiTransfer
     * @return \Generated\Shared\Transfer\PlanetCollectionTransfer $planetsRestApiTransfer
     */
    public function getPlanetCollection(PlanetCollectionTransfer $planetsRestApiTransfer): PlanetCollectionTransfer
    {
        $planetCollection = $this->createPyzPlanetQuery()
            ->find();

        foreach ($planetCollection as $planetEntity) {
            $planetTransfer = (new PlanetTransfer())->fromArray($planetEntity->toArray());
            $planetsRestApiTransfer->addPlanet($planetTransfer);
        }

        return $planetsRestApiTransfer;
    }

}


