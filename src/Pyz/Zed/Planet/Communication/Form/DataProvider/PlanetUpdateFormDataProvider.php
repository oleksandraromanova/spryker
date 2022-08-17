<?php

namespace Pyz\Zed\Planet\Communication\Form\DataProvider;

use Orm\Zed\User\Persistence\Map\SpyPlanetTableMap;
use Spryker\Zed\User\Communication\Form\PlanetUpdateForm;

class PlanetUpdateFormDataProvider extends PlanetFormDataProvider
{
    /**
     * @return array
     */
    public function getOptions()
    {
        $options = parent::getOptions();

        $options[PlanetUpdateForm::OPTION_STATUS_CHOICES] = $this->getStatusSelectChoices();

        return $options;
    }

    /**
     * @return array<string>
     */
    protected function getStatusSelectChoices(): array
    {
        $planetStatuses = SpyPlanetTableMap::getValueSet(SpyPlanetTableMap::COL_STATUS);

        return array_combine(
            $planetStatuses,
            $planetStatuses,
        );
    }
}
