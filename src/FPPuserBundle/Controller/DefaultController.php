<?php

namespace FPPuserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FPPuserBundle:Default:index.html.twig');
    }
}
