<?php

namespace App\Controller\Admin;

use App\Entity\JobType;
use App\Form\JobType1Type;
use App\Repository\JobTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/job/type")
 */
class AdminJobTypeController extends AbstractController
{
    /**
     * @Route("/", name="admin_job_type_index", methods={"GET"})
     */
    public function index(JobTypeRepository $jobTypeRepository): Response
    {
        return $this->render('admin/admin_job_type/index.html.twig', [
            'job_types' => $jobTypeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_job_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $jobType = new JobType();
        $form = $this->createForm(JobType1Type::class, $jobType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($jobType);
            $entityManager->flush();

            return $this->redirectToRoute('admin_job_type_index');
        }

        return $this->render('admin/admin_job_type/new.html.twig', [
            'job_type' => $jobType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_job_type_show", methods={"GET"})
     */
    public function show(JobType $jobType): Response
    {
        return $this->render('admin_job_type/show.html.twig', [
            'job_type' => $jobType,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_job_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, JobType $jobType): Response
    {
        $form = $this->createForm(JobType1Type::class, $jobType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_job_type_index');
        }

        return $this->render('admin/admin_job_type/edit.html.twig', [
            'job_type' => $jobType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_job_type_delete", methods={"POST"})
     */
    public function delete(Request $request, JobType $jobType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jobType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($jobType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_job_type_index');
    }
}
