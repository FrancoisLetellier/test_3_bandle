<?php

namespace Company\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/coco")
     */
    public function indexAction()
    {
        return $this->render('CompanyBlogBundle:Default:index.html.twig');
    }
}
