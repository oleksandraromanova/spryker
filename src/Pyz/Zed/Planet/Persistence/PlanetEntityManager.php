<?php

namespace Pyz\Zed\Planet\Persistence;

use Generated\Shared\Transfer\PlanetTransfer;
use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

class PlanetEntityManager extends AbstractEntityManager implements PlanetEntityManagerInterface
{
    /**
     * @param PlanetTransfer $planetTransfer
     *
     * @return PlanetTransfer
     * @throws PropelException
     * @throws AmbiguousComparisonException
     */

    public function savePlanet(PlanetTransfer $planetTransfer): PlanetTransfer
    {
        $planetEntity = $this->createPyzPlanetQuery()
            ->filterByIdPlanet($planetTransfer->getIdPlanet())
            ->findOneOrCreate();

// fill up entity
        $planetEntity->fromArray($planetTransfer->toArray());
        $planetEntity->save();

// update transfer based on entity (like id_planet field)
        $planetTransfer->fromArray($planetEntity->toArray());

        return $planetTransfer;
    }

    /**
     * @return PyzPlanetQuery
     */

    private function createPyzPlanetQuery(): PyzPlanetQuery
    {
        return PyzPlanetQuery::create();
    }

}


