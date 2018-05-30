<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class ApiLogController extends Controller
{
    /**
     * @Route("/login/api/v1/", name="api" , methods={"POST"})
     */
    public function index(Request $request)
    {
        $nom = $request->request->get('log');
        $pwd = sha1($request->request->get('pwd').'test');

        $userList = $this->getDoctrine()->getRepository(Users::class);
        $user = $userList->findOneByNickname($nom);

        if($user != null){
            if($pwd == $user->getPassword()){
                return $this->json(
                    [
                        "status" => "ok",
                        "message" => "connexion réussie mon capitaine !",
                        "data" => $user
                    ]);
            }
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
