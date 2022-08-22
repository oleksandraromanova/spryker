<?php

namespace Pyz\Zed\Application\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    /**
     * @pararm Request $request
     * @retrun array
     */
    public function indexAction(Request $request): array
    {
        return ['string' => 'Hello DE Store!'];
    }
}

//use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;
//
//class IndexController extends SprykerIndexController
//{
//    /**
//     * @return string
//     */
//    public function indexAction()
//    {
//        return 'Hello DE Store!';
//    }
//}

//use Symfony\Component\HttpFoundation\Response;
//
//class IndexController extends SprykerIndexController
//{
//    /**
//     * @return Response
//     */
//    public function indexAction() : Response
//    {
//        $response = new Response();
//        return $response;
//    }
//}
