<?php

namespace Kolomiets\HomeWork9Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categoryGroup = $em->getRepository('KolomietsHomeWork9Bundle:CategoryGroup')->findAllOrderedByName();

        return $this->render('KolomietsHomeWork9Bundle:Default:index.html.twig',
            array(
                'categorygroup' => $categoryGroup,
            )
        );
    }
}
