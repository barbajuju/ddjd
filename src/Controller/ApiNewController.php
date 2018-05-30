<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ApiNewController extends Controller
{
    /**
     * @Route("/newuser/api/v1/", name="api_new")
     */
    public function index(Request $request)
    {

        $userJSON = $request->request->get('user');
        var_dump($userJSON);

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $usertest = $serializer->deserialize($userJSON, Users::class, 'json');


        $user = new Users();

        $user->setName($usertest->getName());
        $user->setNickname($usertest->getNickname());
        $user->setMail($usertest->getMail());
        $user->setPassword(sha1($usertest->getPassword().'test'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('home');

    }
}
