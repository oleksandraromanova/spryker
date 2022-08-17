<?php

namespace Pyz\Zed\Planet\Communication\Table;

use Spryker\Zed\Gui\Communication\Table\AbstractTable;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;
use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
use Orm\Zed\Planet\Persistence\Map\PyzPlanetTableMap;


class PlanetTable extends AbstractTable
{
    /** @var PyzPlanetQuery */
    private PyzPlanetQuery $planetQuery;

    /**
     * @param PyzPlanetQuery $planetQuery
     */

    public function __construct(PyzPlanetQuery $planetQuery)
    {
        $this->planetQuery = $planetQuery;
    }

    /**
     * @param TableConfiguration $config
     *
     * @return array
     */
    protected function prepareData(TableConfiguration $config): array
    {
        return $this->runQuery($this->planetQuery, $config);
    }

    /**
     * @param TableConfiguration $config
     *
     * @return TableConfiguration
     */
    protected
    function configure(TableConfiguration $config): TableConfiguration
    {
        $config->setHeader([PyzPlanetTableMap::COL_NAME => 'Planet name', PyzPlanetTableMap::COL_INTERESTING_FACT => 'Interesting fact']);
        $config->setSortable([PyzPlanetTableMap::COL_NAME, PyzPlanetTableMap::COL_INTERESTING_FACT]);
        $config->setSearchable([PyzPlanetTableMap::COL_NAME]);
        return $config;
    }


}
