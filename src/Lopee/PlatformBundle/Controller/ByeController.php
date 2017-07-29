<?php

namespace Lopee\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ByeController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('LopeePlatformBundle:Bye:index.html.twig', array("nom" => "Flo"));

        return new Response($content);
    }
}