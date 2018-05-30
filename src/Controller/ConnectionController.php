<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Users;
use Symfony\Component\HttpFoundation\Session\Session;

class ConnectionController extends Controller
{
    /**
     * @Route("/connection", name="connection")
     */
    public function index(Request $request)
    {
        $nom = $request->request->get('log');
        $pwd = sha1($request->request->get('pwd').'test');

        $userList = $this->getDoctrine()->getRepository(Users::class);
        $user = $userList->findOneByNickname($nom);


        $sessionTest = $request->getSession();
        //var_dump($nom);
        //var_dump($user);
        if($user != null){
            if($pwd == $user->getPassword()){

                if(!$sessionTest->has('prenom')) {
                    $session = new Session();
                    $session->set('prenom', $user->getName());
                    $session->set('nickname', $user->getNickname());
                    $session->set('mail', $user->getMail());
                    $session->set('id', $user->getId());

                    return $this->redirectToRoute('home');
                    /*return $this->render('home/index.html.twig', [
                        'controller_name' => 'HomeController',
                        "sessionX" => $request->getSession()->get('prenom')
                    ]);*/
                }


            }
            /*return $this->json(
                [
                    "status" => "ok",
                    "message" => "",
                    "data" => $user
                ]);
        }
        */
            else{
                return $this->json(
                    [
                        "status" => "ko",
                        "message" => "Mot de passe incorrect",
                        "data" => null
                    ]);
            }

        }
        else {
            return $this->json(
                [
                    "status" => "ko",
                    "message" => "Vous n'êtes pas fiché S désolé.",
                    "data" => null
                ]);
        }


    }
}
