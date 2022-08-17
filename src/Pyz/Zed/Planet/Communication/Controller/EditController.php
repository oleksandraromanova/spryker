<?php

namespace Pyz\Zed\Planet\Communication\Controller;

use Generated\Shared\Transfer\PlanetTransfer;
use Pyz\Zed\Planet\Communication\PlanetCommunicationFactory;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Pyz\Zed\Planet\Business\Planet\PlanetReader;
use Pyz\Zed\Planet\Business\PlanetFacadeInterface;

/**
 * @method PlanetCommunicationFactory getFactory()
 * @method PlanetFacadeInterface getFacade()
 */

//* @method \Spryker\Zed\User\Persistence\UserQueryContainerInterface getQueryContainer()

class EditController extends AbstractController
{
    /**
     * @var string
     */
    public const MESSAGE_ID_PLANET_EXTRACT_ERROR = 'Missing planet id!';

    /**
     * @var string
     */
    public const PLANET_LISTING_URL = '/planet';


    /**
     * @param Request $request
     *
     * @return array|RedirectResponse
     */

    public function indexAction(Request $request)
    {
        $idPlanet = $this->castId(($request->query->get('id-planet')));

        if (empty($idPlanet)) {
            $this->addErrorMessage(static::MESSAGE_ID_PLANET_EXTRACT_ERROR);

            return $this->redirectResponse(static::PLANET_LISTING_URL);
        }

        //$dataProvider = $this->getFactory()->createPlanetUpdateFormDataProvider();
        //$providerData = $dataProvider->getData($idPlanet);

        $planetTransfer = (new PlanetTransfer())
        ->setIdPlanet($idPlanet);
        // TODO add business logic to retrieve Planet by id
//        ->setName('1')
//            ->setInterestingFact('1');

 //       if ($userForm->isSubmitted() && $userForm->isValid()) {
//            $formData = $userForm->getData();
//            $userTransfer = new UserTransfer();
//            $userTransfer->fromArray($formData, true);
//            $userTransfer->setIdUser($idUser);
//            $this->getFacade()->updateUser($userTransfer);
//
//            $this->deleteAclGroups($idUser);
//            $this->addAclGroups($formData, $userTransfer);
//
//            $this->addSuccessMessage(static::MESSAGE_USER_UPDATE_SUCCESS);
//
//            return $this->redirectResponse(static::USER_LISTING_URL);
//        }
//

        $planetForm = $this->getFactory()
            ->createPlanetForm($planetTransfer)
            ->handleRequest($request);

        if ($planetForm->isSubmitted() && $planetForm->isValid()) {
            $this->addSuccessMessage('Planet was updated. Well not yet :)');
            return $this->redirectResponse('/planet/list');
        }

        return $this->viewResponse([
            'planetForm' => $planetForm->createView()
        ]);
    }
}

//    /**
//     * @param Request $request
//     *
//     * @return RedirectResponse|array
//     */
//    public function updateAction(Request $request)
//    {
//        $idPlanet = $this->castId(($request->query->get('id-planet'));
//
//        if (empty($idPlanet)) {
//            $this->addErrorMessage(static::MESSAGE_ID_PLANET_EXTRACT_ERROR);
//
//            return $this->redirectResponse(static::PLANET_LISTING_URL);
//        }
//
//        $dataProvider = $this->getFactory()->createUserUpdateFormDataProvider();
//        $providerData = $dataProvider->getData($idUser);
//
//        if ($providerData === null) {
//            $this->addErrorMessage(static::MESSAGE_USER_NOT_FOUND);
//
//            return $this->redirectResponse(static::USER_LISTING_URL);
//        }
//
//        $userForm = $this->getFactory()
//            ->createUpdateUserForm(
//                $providerData,
//                $dataProvider->getOptions(),
//            )
//            ->handleRequest($request);
//
//        if ($userForm->isSubmitted() && $userForm->isValid()) {
//            $formData = $userForm->getData();
//            $userTransfer = new UserTransfer();
//            $userTransfer->fromArray($formData, true);
//            $userTransfer->setIdUser($idUser);
//            $this->getFacade()->updateUser($userTransfer);
//
//            $this->deleteAclGroups($idUser);
//            $this->addAclGroups($formData, $userTransfer);
//
//            $this->addSuccessMessage(static::MESSAGE_USER_UPDATE_SUCCESS);
//
//            return $this->redirectResponse(static::USER_LISTING_URL);
//        }
//
//        return $this->viewResponse([
//            'userForm' => $userForm->createView(),
//        ]);
//    }
//
//}
