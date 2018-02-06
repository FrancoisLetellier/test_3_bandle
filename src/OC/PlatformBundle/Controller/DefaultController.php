<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/robert")
     */
    public function indexAction()
    {
        return $this->render('OCPlatformBundle:Default:index.html.twig');
    }
}
