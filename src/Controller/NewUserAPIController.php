<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Users;
use App\Form\CreateUserType;

class NewUserAPIController extends Controller
{
    /**
     * @Route("/newuser", name="new_user")
     */
    public function index(Request $request)
    {


        return $this->render('new_user_api/index.html.twig', [
            'controller_name' => 'NewUserAPIController',
        ]);
    }
}
