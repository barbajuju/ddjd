<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request)
    {




        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',

            'sessionX'=>$request->getSession()->get('prenom')

        ]);
    }
}
