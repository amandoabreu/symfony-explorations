<?php
/**
 * Created by PhpStorm.
 * User: aabreu
 * Date: 15/09/16
 * Time: 10:15
 */

namespace WordpressBundle;




use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\Controller;

/**
 * @Route(path="/import", name="wordpress_import")
 */
class ImporterController extends Controller{
    public function __construct()
    {
        return new Response('Shit');
    }
}