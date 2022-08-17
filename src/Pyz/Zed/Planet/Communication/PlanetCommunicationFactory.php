<?php

namespace Pyz\Zed\Planet\Communication;

use Generated\Shared\Transfer\PlanetTransfer;
use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
use Pyz\Zed\Planet\PlanetDependencyProvider;
use Pyz\Zed\Planet\Communication\Table\PlanetTable;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Symfony\Component\Form\FormInterface;

class PlanetCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return PlanetTable
     * @throws ContainerKeyNotFoundException
     */
    public function createPlanetTable(): PlanetTable
    {
        return new PlanetTable($this->getPlanetPropelQuery());
    }

    /**
     * @return PyzPlanetQuery
     * @throws ContainerKeyNotFoundException
     */
    private function getPlanetPropelQuery(): PyzPlanetQuery
    {
        return $this->getProvidedDependency(PlanetDependencyProvider::QUERY_PLANET);
    }

    /**
     * @param PlanetTransfer|null $planetTransfer
     * @param array $options
     *
     * @return FormInterface
     */

    public function createPlanetForm(?PlanetTransfer $planetTransfer = null, array $options = []): FormInterface
    {
        return $this->getFormFactory()->create(
            PlanetForm::class,
            $planetTransfer,
            $options
        );

    }

    /**
     * @return \Spryker\Zed\User\Communication\Form\DataProvider\PlanetUpdateFormDataProvider
     */
    public function createPlanetUpdateFormDataProvider()
    {
        /** @var \Spryker\Zed\User\Business\PlanetFacade $planetFacade */
        $planetFacade = $this->getFacade();

        return new PlanetUpdateFormDataProvider($this->getGroupPlugin(), $planetFacade);
    }

    /**
     * @return \Spryker\Zed\User\Dependency\Plugin\GroupPluginInterface
     */
    public function getGroupPlugin()
    {
        return $this->getProvidedDependency(PlanetDependencyProvider::PLUGIN_GROUP);
    }

}
