<?php

namespace SomeWork\AdminAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SomeWorkAdminAppBundle:Default:index.html.twig');
    }
}
