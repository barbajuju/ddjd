<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\CreateUserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewUserController extends Controller
{
    /**
     * @Route("/new/", name="new")
     */
    public function index(Request $request)
    {

        $user=new Users();
        $form = $this->createForm(CreateUserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $user->setPassword(sha1($user->getPassword().'test'));
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("home");
        }


        return $this->render('new_user/index.html.twig', [
            'controller_name' => 'NewUserController',
            "form" => $form->createView(),
            'sessionX'=>$request->getSession()->get('prenom')
        ]);
    }
}
