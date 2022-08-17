<?php

namespace Pyz\Zed\Planet\Business;

use Pyz\Zed\Planet\Business\Planet\PlanetSaver;
use Pyz\Zed\Planet\Business\Planet\PlanetSaverInterface;
use Pyz\Zed\Planet\Persistence\PlanetEntityManagerInterface;
use Pyz\Zed\Planet\Persistence\PlanetRepositoryInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Pyz\Zed\Planet\Business\Planet\PlanetReaderInterface;

/**
 * @method PlanetEntityManagerInterface getEntityManager()
 * @method PlanetRepositoryInterface getRepository()
 */


class PlanetBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return PlanetSaverInterface
     */

    public function createPlanetSaver(): PlanetSaverInterface
    {
        return new PlanetSaver(
            $this->getEntityManager()
        );
    }

    /**
     * @return PlanetReaderInterface
     */

    public function createPlanetReader(): PlanetReaderInterface
    {
        return new PlanetReader(
            $this->getRepository()
        );
    }

}


