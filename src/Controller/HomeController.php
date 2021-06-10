<?php

namespace App\Controller;

use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(JobOfferRepository  $jobOfferRepository): Response
    {
        $jobCat = $jobOfferRepository->FindAllWithJoin();
        return $this->render('home/index.html.twig', [
            'job_offers' => $jobCat,
        ]);
    }
}
