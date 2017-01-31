<?php

namespace SomeWork\MtsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SomeWorkMtsBundle:Default:index.html.twig');
    }
}
