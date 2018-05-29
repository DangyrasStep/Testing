<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TwoController extends Controller
{
    /**
     * @Route("/two", name="two")
     */
    public function index()
    {
        return $this->render('two/index.html.twig', [
            'controller_name' => 'TwoController',
        ]);
    }
}
