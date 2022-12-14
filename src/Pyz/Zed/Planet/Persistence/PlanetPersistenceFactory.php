<?php

namespace Pyz\Zed\Planet\Persistence;

use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

class PlanetPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return PyzPlanetQuery
     */
    public function createPlanetQuery(): PyzPlanetQuery
    {
        return PyzPlanetQuery::create();
    }
}
