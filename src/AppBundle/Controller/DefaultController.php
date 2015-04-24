<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('AppBundle::test/index.html.twig');
    }

    /**
     * @Route("/test", name="test")
     */
    public function testAction()
    {
        return $this->render('AppBundle:test:test.html.twig');
    }
}
