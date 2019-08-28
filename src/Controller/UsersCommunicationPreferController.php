<?php

namespace App\Controller;

use App\Entity\MyjiscUsersCommunicationPreference;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class UsersCommunicationPreferController extends AbstractController
{
    /**
     * @Route("/api/user_commun_prefer", methods={"GET","HEAD"})
     */
    public function getUserCommunPreference($user_id = 1)
    {
        $userCommunPrefer = $this->getDoctrine()
            ->getRepository(MyjiscUsersCommunicationPreference::class)
            ->find($user_id);

        if (!$userCommunPrefer) {
            throw $this->createNotFoundException(
                'No product found for id ' . $user_id
            );
        }

        $userCommunPreferData = [
            $userCommunPrefer->getHeadlinesIsChecked(),
            $userCommunPrefer->getEventsIsChecked(),
            $userCommunPrefer->getMarketResearchIsChecked()
        ];
        return new Response(json_encode($userCommunPreferData));
    }

    /**
     * @Route("/api/user_commun_prefer", methods={"PUT","PATCH"})
     */
    public function updateUserCommunPrefer(Request $request)
    {
        $user_id = 1;
        $data = json_decode($request->getContent(), true);

        $entityManager = $this->getDoctrine()->getManager();
        $user_commun_prefer = $entityManager->getRepository(MyjiscUsersCommunicationPreference::class)->findOneBy(['user_id' => $user_id]);

        if (!$user_commun_prefer) {
            throw $this->createNotFoundException(
                'No product found for id ' . $user_id
            );
        } else {
            if ($data['user_commun_prefer'] == 'headlines_isChecked') {
                $user_commun_prefer->setHeadlinesIsChecked($data['value']);
            }
            if ($data['user_commun_prefer'] == 'events_isChecked') {
                $user_commun_prefer->setEventsIsChecked($data['value']);
            }
            if ($data['user_commun_prefer'] == 'marketResearch_isChecked') {
                $user_commun_prefer->setMarketResearchIsChecked($data['value']);
            }
        }

        $entityManager->merge($user_commun_prefer);
        $entityManager->flush();

        return new Response(json_encode([
            'data' => $data,
        ]));
    }
}
