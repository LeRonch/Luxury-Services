<?php

namespace App\Controller\Admin;

use App\Entity\JobOffer;
use App\Form\JobOffer1Type;
use App\Repository\JobOfferRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin_index")
 */
class AdminJobOfferController extends AbstractController
{
    /**
     * @Route("/", name="admin_index", methods={"GET"})
     */
    public function index(JobOfferRepository $jobOfferRepository): Response
    {
        return $this->render('admin/admin_job_offer/index.html.twig', [
            'job_offers' => $jobOfferRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_job_offer_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $jobOffer = new JobOffer();
        $form = $this->createForm(JobOffer1Type::class, $jobOffer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            $jobOffer->setDateDeCreation(new DateTime());
            $entityManager = $this->getDoctrine()->getManager();
    
            $entityManager->persist($jobOffer);
            $entityManager->flush();

            return $this->redirectToRoute('admin_index');
        }

        return $this->render('admin/admin_job_offer/new.html.twig', [
            'job_offer' => $jobOffer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_job_offer_show", methods={"GET"})
     */
    public function show(JobOffer $jobOffer): Response
    {
        return $this->render('admin/admin_job_offer/show.html.twig', [
            'job_offer' => $jobOffer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_job_offer_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, JobOffer $jobOffer): Response
    {
        $form = $this->createForm(JobOffer1Type::class, $jobOffer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_ndex');
        }

        return $this->render('admin/admin_job_offer/edit.html.twig', [
            'job_offer' => $jobOffer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_job_offer_delete", methods={"POST"})
     */
    public function delete(Request $request, JobOffer $jobOffer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jobOffer->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($jobOffer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_index');
    }
}
