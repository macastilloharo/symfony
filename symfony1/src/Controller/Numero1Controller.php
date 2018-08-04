<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Numero1Controller extends Controller
{
    /**
     * @Route("/numero1", name="numero1")
     */
    public function index()
    {
        return $this->render('numero1/index.html.twig', [
            'controller_name' => 'Numero1Controller',
        ]);
    }



    
}
