<?php

namespace ehassanov\RestGeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ehassanovRestGeneratorBundle:Default:index.html.twig');
    }
}
