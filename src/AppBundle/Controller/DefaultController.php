<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Zend\Stdlib\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/appbundle")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return new Response('App bundle');
    }
}
