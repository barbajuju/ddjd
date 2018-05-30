<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

class MonsterController extends Controller
{
    /**
     * @Route("/monster", name="monster")
     */
    public function index(Request $request)
    {
        $sessionTest = $request->getSession();

        if($sessionTest->has('prenom')) {

            $sessionTest->invalidate();

        }

        return $this->render('monster/index.html.twig', [
            'controller_name' => 'MonsterController',
            'sessionX'=>$request->getSession()->get('prenom')

        ]);
    }
}
