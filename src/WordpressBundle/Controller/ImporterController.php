<?php
/**
 * Created by PhpStorm.
 * User: aabreu
 * Date: 15/09/16
 * Time: 10:15
 */

namespace WordpressBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ImporterController extends Controller{

    public function importAction()
    {
        return new Response('Shit');
    }
}