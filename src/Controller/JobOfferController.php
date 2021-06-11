<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\JobOffer;
use App\Entity\JobType;
use App\Form\JobOfferType;
use App\Form\JobTypeType;
use App\Repository\CandidatureRepository;
use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;

/**
 * @Route("/job/offer")
 */
class JobOfferController extends AbstractController
{
    /**
     * @Route("/", name="job_offer_index", methods={"GET"})
     */
    public function index(JobOfferRepository $jobOfferRepository): Response
    {
        $jobCat = $jobOfferRepository->FindAllWithJoin();
        return $this->render('job_offer/index.html.twig', [
            'job_offers' => $jobCat,
        ]);
    }

    /**
     * @Route("/new", name="job_offer_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $jobOffer = new JobOffer();
        $form = $this->createForm(JobOfferType::class, $jobOffer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $jobOffer->setDateDeCreation(new DateTime);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($jobOffer);
            $entityManager->flush();

            return $this->redirectToRoute('job_offer_index');
        }

        return $this->render('job_offer/new.html.twig', [
            'job_offer' => $jobOffer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="job_offer_show", methods={"GET"})
     */
    public function show(JobOffer $jobOffer,JobOfferRepository $jobOfferRepository,CandidatureRepository $candidatureRepository): Response
    {
        // $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $jobBefore = $jobOfferRepository->getPreviousJob($jobOffer);
        $jobAfter = $jobOfferRepository->getNextJob($jobOffer);

        $idCandidate = $this->getUser()->getCandidate()->getId();

        $idOffer = $jobOffer->getId();
        $jobTypeRepository = $this->getDoctrine()
        ->getRepository(JobType::class);
        
        $jobType = $jobTypeRepository->findOneBy(['id' => $jobOffer->getJobTypeId()]);

        return $this->render('job_offer/show.html.twig', [
            'job_offer' => $jobOffer,
            'job_type' => $jobType,
            'job_previous'=> $jobBefore,
            'job_next'=> $jobAfter,
            'candidature' => !! $candidatureRepository->findOneBy([
                'id_offer'=> $idOffer,
                'id_candidat'=> $idCandidate,
            ])
        ]);

    }





    

    /**
     * @Route("/{id}/edit", name="job_offer_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, JobOffer $jobOffer): Response
    {
        $form = $this->createForm(JobOfferType::class, $jobOffer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('job_offer_index');
        }

        return $this->render('job_offer/edit.html.twig', [
            'job_offer' => $jobOffer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="job_offer_delete", methods={"POST"})
     */
    public function delete(Request $request, JobOffer $jobOffer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jobOffer->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($jobOffer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('job_offer_index');
    }
}
