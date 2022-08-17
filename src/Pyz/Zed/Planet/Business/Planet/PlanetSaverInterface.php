<?php

namespace Pyz\Zed\Planet\Business\Planet;

use Generated\Shared\Transfer\PlanetTransfer;

interface PlanetSaverInterface
{
    /**
     * @param PlanetTransfer $planetTransfer
     *
     * @return PlanetTransfer
     */

    public function save(PlanetTransfer $planetTransfer): PlanetTransfer;

}
