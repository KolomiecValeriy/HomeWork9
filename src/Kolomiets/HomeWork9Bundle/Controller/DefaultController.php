<?php

namespace Kolomiets\HomeWork9Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KolomietsHomeWork9Bundle:Default:index.html.twig');
    }
}
