<?php

namespace Pyz\Zed\Planet\Business;

use Generated\Shared\Transfer\PlanetTransfer;

interface PlanetFacadeInterface
{
    /**
     * Specification:
     * - stores Planet to the database based on input transfer
     * - returns enhanced `PlanetTransfer` with ID
     *
     * @param PlanetTransfer $planetTransfer
     *
     * @return PlanetTransfer
     * @api
     *
     */

public function savePlanet(PlanetTransfer $planetTransfer): PlanetTransfer;

    /**
     * Specification:
     * - returns Planet if exists based on its ID
     * - returns null if no such record is found
     *
     * @param int $idPlanet
     *
     * @return PlanetTransfer|null
     */

    public function findPlanetById(int $idPlanet): ?PlanetTransfer;


}
