<?php

namespace App\Controller;

use App\Repository\AbsenceRepository;
use App\Repository\ElevesRepository;
use App\Repository\MatieresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ElevesRepository $elevesRepository, MatieresRepository $matieresRepository, AbsenceRepository $absenceRepository): Response
    {
        $user = $this->getUser();
        /** @var User|null $user */
        $userId = $user->getId();

        $userEleveId = $user->getIdEleve();
        $eleve_id = $elevesRepository->findOneBy(['id' => $userEleveId]);


        $absences = $absenceRepository->findBy(['id_eleve' => $userEleveId]);
        

        return $this->render('home/index.html.twig', [
            'userEleveId' => $userEleveId,
            'absences' => $absences,
            'controller_name' => 'HomeController',
        ]);
    }
}
