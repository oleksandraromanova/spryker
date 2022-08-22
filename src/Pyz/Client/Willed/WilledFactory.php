<?php

namespace Pyz\Client\Willed;

use Pyz\Client\Willed\Zed\WilledZedStub;
use Pyz\Client\Willed\Zed\WilledZedStubInterface;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\AbstractFactory;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Kernel\Dependency\Injector\DependencyInjector;

class WilledFactory extends AbstractFactory
{
    /**
     * @retrun WilledZedStubInterface
     */
    public function createWilledZedStub()
    {
        return new WilledZedStub($this->getZedRequestClient());
    }

    /**
     * @retrun ZedRequestClientInterface
     */
    protected function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(WilledDependencyProvider::CLIENT_ZED_REQUEST);
    }

    protected function provideExternalDependencies(AbstractBundleDependencyProvider $dependencyProvider, Container $container)
    {
        // TODO: Implement provideExternalDependencies() method.
    }

    protected function injectExternalDependencies(DependencyInjector $dependencyInjector, Container $container)
    {
        // TODO: Implement injectExternalDependencies() method.
    }
}
