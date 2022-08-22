<?php

namespace Pyz\Zed\ApplicationAT\Communication\Controller;

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
        return ['string' => 'Hello AT Store!'];
    }
}
