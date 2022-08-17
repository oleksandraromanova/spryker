<?php

namespace Pyz\Client\Catalog;

use Spryker\Client\Cart\CartClientInterface;
use Spryker\Client\Catalog\CatalogFactory as SprykerCatalogFactory;
use Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Spryker\Client\ProductStorage\ProductStorageClientInterface;

class CatalogFactory extends SprykerCatalogFactory
{
    /**
     * @return CartClientInterface
     * @throws ContainerKeyNotFoundException
     *
     */
    public function getCartClient()
    {
        return $this->getProvidedDependency(CatalogDependencyProvider::CLIENT_CART);
    }

    /**
     * @return ProductStorageClientInterface
     * @throws ContainerKeyNotFoundException
     *
     */
    public function getProductStorageClient()
    {
        return $this->getProvidedDependency(CatalogDependencyProvider::CLIENT_PRODUCT_STORAGE);
    }
}
