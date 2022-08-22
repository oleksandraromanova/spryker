<?php

namespace Pyz\Zed\Planet\Business\Planet;

use Generated\Shared\Transfer\PlanetCollectionTransfer;
use Generated\Shared\Transfer\PlanetTransfer;
use Pyz\Zed\Planet\Persistence\PlanetRepositoryInterface;

class PlanetReader implements PlanetReaderInterface
{
    /** @var PlanetRepositoryInterface */

    private PlanetRepositoryInterface $planetRepository;

    /**
     * @param PlanetRepositoryInterface $planetRepository
     */

    public function __construct(PlanetRepositoryInterface $planetRepository)
    {
        $this->planetRepository = $planetRepository;
    }

    /**
     * @param int $idPlanet
     *
     * @return PlanetTransfer|null
     */

    public function findPlanetById(int $idPlanet): ?PlanetTransfer
    {
        return $this->planetRepository->findPlanetById($idPlanet);
    }

    /**
     * @param PlanetCollectionTransfer $planetsRestApiTransfer
     * @return PlanetCollectionTransfer $planetsRestApiTransfer
     */
    public function getPlanetCollection(PlanetCollectionTransfer $planetsRestApiTransfer): PlanetCollectionTransfer
    {
        return $this->planetRepository->getPlanetCollection($planetsRestApiTransfer);
    }

}

