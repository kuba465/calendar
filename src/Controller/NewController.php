<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NewController extends Controller
{
    /**
     * @Route("/", name="new")
     */
    public function index()
    {
        // replace this line with your own code!
        return new Response('Kuba');
    }
}
