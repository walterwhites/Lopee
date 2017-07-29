<?php

namespace Lopee\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LopeePlatformBundle:Default:index.html.twig');
    }
}
