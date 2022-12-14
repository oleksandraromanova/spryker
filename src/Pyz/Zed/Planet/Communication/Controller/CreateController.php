<?php

namespace Pyz\Zed\Planet\Communication\Controller;

use Pyz\Zed\Planet\Business\PlanetFacadeInterface;
use Pyz\Zed\Planet\Communication\PlanetCommunicationFactory;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method PlanetCommunicationFactory getFactory()
 * @method PlanetFacadeInterface getFacade()
 */

class CreateController extends AbstractController
{
    /**
     * @param Request $request
     *
     * @return array|RedirectResponse
     */

    public function indexAction(Request $request)
    {
        $planetForm = $this->getFactory()
            ->createPlanetForm()
            ->handleRequest($request);

        if ($planetForm->isSubmitted() && $planetForm->isValid()) {
            $this->getFacade()
                ->savePlanet($planetForm->getData());
            $this->addSuccessMessage('Planet was created.');

            return $this->redirectResponse('/planet/list');
        }

        return $this->viewResponse([
            'planetForm' => $planetForm->createView()
        ]);
    }

}
