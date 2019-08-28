<?php

namespace App\Controller;

use App\Entity\MyjiscUsersInterests;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class UsersInterestsController extends AbstractController
{
    /**
     * @Route("/api/user_interests", methods={"GET","HEAD"})
     */
    public function getUserInterests($user_id = 1) {
        $userInterests = $this->getDoctrine()
            ->getRepository(MyjiscUsersInterests::class)
            ->find($user_id);

        if (!$userInterests) {
            throw $this->createNotFoundException(
                'No product found for id '.$user_id
            );
        }

        $userInterestsData = [
            $userInterests->getHigherEducationIsChecked(),
            $userInterests->getFurtherEducationIsChecked(),
            $userInterests->getResearchIsChecked(),
            $userInterests->getCurriculumIsChecked(),
            $userInterests->getItNetworksIsChecked(),
            $userInterests->getLibrariesIsChecked(),
            $userInterests->getRdActivityIsChecked(),
            $userInterests->getProductsServiceIsChecked(),
            $userInterests->getAdviceGuidance(),
        ];
        return new Response(json_encode($userInterestsData));
    }
    /**
     * @Route("/api/user_interests", methods={"PUT","PATCH"})
     */
    public function updateUserInterests(Request $request)
    {
        $user_id = 1;
        $data = json_decode($request->getContent(), true);
        $entityManager = $this->getDoctrine()->getManager();
        $user_interests = $entityManager->getRepository(MyjiscUsersInterests::class)->findOneBy(['user_id' => $user_id]);

        if (!$user_interests) {
            throw $this->createNotFoundException(
                'No product found for id '.$user_id
            );
        }else {
            if ($data['user_interests'] == 'higherEducation_isChecked' ) {
                $user_interests->setHigherEducationIsChecked($data['value']);
            }
            if ($data['user_interests'] == 'furtherEducation_isChecked' ) {
                $user_interests->setFurtherEducationIsChecked($data['value']);
            }
            if ($data['user_interests'] == 'research_isChecked' ) {
                $user_interests->setResearchIsChecked($data['value']);
            }
            if ($data['user_interests'] == 'curriculum_isChecked' ) {
                $user_interests->setCurriculumIsChecked($data['value']);
            }
            if ($data['user_interests'] == 'itNetworks_isChecked' ) {
                $user_interests->setItNetworksIsChecked($data['value']);
            }
            if ($data['user_interests'] == 'libraries_isChecked' ) {
                $user_interests->setLibrariesIsChecked($data['value']);
            }
            if ($data['user_interests'] == 'rdActivity_isChecked' ) {
                $user_interests->setRdActivityIsChecked($data['value']);
            }
            if ($data['user_interests'] == 'productsService_isChecked' ) {
                $user_interests->setProductsServiceIsChecked($data['value']);
            }
            if ($data['user_interests'] == 'advice_guidance' ) {
                $user_interests->setAdviceGuidance($data['value']);
            }
        }
        $entityManager->merge($user_interests);
        $entityManager->flush();

        return new Response(json_encode([
            'data' => $data,
        ]));
    }
}
