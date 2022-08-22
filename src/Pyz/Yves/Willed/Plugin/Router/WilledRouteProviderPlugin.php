<?php

namespace Pyz\Yves\Willed\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class WilledRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    protected const ROUTE_WILLED_INDEX = 'willed-index';

    /**
     * Specification:
     * - Adds Routes to the RouteCollection.
     *
     * @api
     *
     * @param RouteCollection $routeCollection
     *
     * @return RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addWilledIndexRoute($routeCollection);

        return $routeCollection;
    }

    /**
     * @param RouteCollection $routeCollection
     *
     * @return RouteCollection
     */
    protected function addWilledIndexRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/willed', 'Willed', 'Index', 'indexAction');
        $routeCollection->add(static::ROUTE_WILLED_INDEX, $route);

        return $routeCollection;
    }
}
