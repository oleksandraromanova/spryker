<?php

namespace Pyz\Zed\Planet\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Spryker\Zed\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @method \Pyz\Zed\Planet\Communication\PlanetCommunicationFactory getFactory()
 */
class ListController extends AbstractController
{
    /**
     * @return array
     * @throws ContainerKeyNotFoundException
     */
    public function indexAction(): array
    {
        $planetTable = $this->getFactory()->createPlanetTable();
        return $this->viewResponse(['planetTable' => $planetTable->render()]);
    }

    /**
     * @return JsonResponse
     * @throws ContainerKeyNotFoundException
     */
    public function tableAction(): JsonResponse
    {
        $planetTable = $this->getFactory()->createPlanetTable();
        return $this->jsonResponse($planetTable->fetchData());
    }
}
