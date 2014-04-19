<?php

namespace Acme\EntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeEntrepriseBundle:Default:index.html.twig', array('name' => $name));
    }
}
