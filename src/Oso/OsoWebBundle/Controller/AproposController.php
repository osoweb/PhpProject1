<?php

namespace Oso\OsoWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AproposController extends Controller
{
    /**
     * @Route("/apropos", name="apropos_show")
     * @Template()
     */
    public function showAction()
    {
        return array();
    }
}
