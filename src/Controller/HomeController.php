<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
        /*
        $sessionX = null;
        $sessionTest = $request->getSession();
        if($sessionTest->isStarted()){
            $sessionX = $sessionTest->get('prenom');

        }
*/
        $userList = $this->getDoctrine()->getRepository(Users::class);
        //$q = $request->query->get("q");
        $users = $userList->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'Accueil',
            'users'=>$users,
            'sessionX'=>$request->getSession()->get('prenom')
        ]);
    }
}
