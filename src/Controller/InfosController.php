<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InfosController extends Controller
{
    /**
     * @Route("/infos", name="infos")
     */
    public function index()
    {
        return $this->render('infos/index.html.twig', [
            'controller_name' => 'InfosController',
        ]);
    }
}
