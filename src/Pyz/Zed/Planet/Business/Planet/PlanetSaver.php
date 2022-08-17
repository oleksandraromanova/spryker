<?php

namespace Pyz\Zed\Planet\Business\Planet;

use Generated\Shared\Transfer\PlanetTransfer;
use Pyz\Zed\Planet\Persistence\PlanetEntityManagerInterface;

class PlanetSaver implements PlanetSaverInterface
{
    /** @var PlanetEntityManagerInterface */

    private PlanetEntityManagerInterface $planetEntityManager;

    /**
     * @param PlanetEntityManagerInterface $planetEntityManager
     */

    public function __construct(PlanetEntityManagerInterface $planetEntityManager)
    {
        $this->planetEntityManager = $planetEntityManager;
    }

    /**
     * @param PlanetTransfer $planetTransfer
     *
     * @return PlanetTransfer
     */

    public function save(PlanetTransfer $planetTransfer): PlanetTransfer
    {
        return $this->planetEntityManager->savePlanet($planetTransfer);
    }
}

