<?php

namespace Pyz\Zed\Planet;

use Orm\Zed\Planet\Persistence\PyzPlanetQuery;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class PlanetDependencyProvider extends AbstractBundleDependencyProvider
{
    public const QUERY_PLANET = 'QUERY_PLANET';

    /**
     * @param Container $container
     *
     * @return Container
     * @throws \Spryker\Service\Container\Exception\ContainerException
     * @throws \Spryker\Service\Container\Exception\FrozenServiceException
     */
    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        $container = $this->addPyzPlanetPropelQuery($container);
        return $container;
    }

    /**
     * @param Container $container
     *
     * @return Container
     * @throws \Spryker\Service\Container\Exception\ContainerException
     * @throws \Spryker\Service\Container\Exception\FrozenServiceException
     */

    private function addPyzPlanetPropelQuery(Container $container): Container
    {
        $container->set(static::QUERY_PLANET, $container->factory(fn() => PyzPlanetQuery::create()));
        return $container;
    }
}
