<?php

namespace App\Controller;

use App\Entity\MyjiscUsers;
//use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class UsersController extends AbstractController
{
    /**
     * @Route("/api")
     */
    public function getCurrentApi()
    {
        return new Response(json_encode([
            'api_ver' => '1.0',
        ]));
    }

    /**
     * @Route("/api/user", methods={"GET","HEAD"})
     */
    public function getUserAction($id = 1)
    {
        $user = $this->getDoctrine()
            ->getRepository(MyjiscUsers::class)
            ->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $userData = [
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),
            'email' => 'Protected'
        ];
        return new Response(json_encode($userData));
    }

    /**
     * @Route("/api/user", methods={"PUT","PATCH"})
     */
    public function updateUserAction(Request $request)
    {
        $id = 1;
        $data = json_decode($request->getContent(), true);

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(MyjiscUsers::class)->findOneBy(['id' => $id]);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

//        $first_name = $request->query->get('first_name', 'Unknown');
//        $last_name = $request->query->get('last_name', 'Unknown');

        $user->setFirstName($data['first_name']);
        $user->setLastName($data['last_name']);
        
        $entityManager->merge($user);
        $entityManager->flush();

        return new Response(json_encode([
            //'request' => $request,
            'data' => $data,
            'first_name' => $data['first_name'],
        ]));
    }

}