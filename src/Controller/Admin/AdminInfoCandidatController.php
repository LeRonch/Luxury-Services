<?php

namespace App\Controller\Admin;

use App\Entity\InfoAdminCandidat;
use App\Form\InfoAdminCandidat1Type;
use App\Repository\InfoAdminCandidatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/info/candidat")
 */
class AdminInfoCandidatController extends AbstractController
{
    /**
     * @Route("/", name="admin_info_candidat_index", methods={"GET"})
     */
    public function index(InfoAdminCandidatRepository $infoAdminCandidatRepository): Response
    {
        return $this->render('admin/admin_info_candidat/index.html.twig', [
            'info_admin_candidats' => $infoAdminCandidatRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_info_candidat_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $infoAdminCandidat = new InfoAdminCandidat();
        $form = $this->createForm(InfoAdminCandidat1Type::class, $infoAdminCandidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($infoAdminCandidat);
            $entityManager->flush();

            return $this->redirectToRoute('admin_info_candidat_index');
        }

        return $this->render('admin/admin_info_candidat/new.html.twig', [
            'info_admin_candidat' => $infoAdminCandidat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_info_candidat_show", methods={"GET"})
     */
    public function show(InfoAdminCandidat $infoAdminCandidat): Response
    {
        return $this->render('admin/admin_info_candidat/show.html.twig', [
            'info_admin_candidat' => $infoAdminCandidat,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_info_candidat_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, InfoAdminCandidat $infoAdminCandidat): Response
    {
        $form = $this->createForm(InfoAdminCandidat1Type::class, $infoAdminCandidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_info_candidat_index');
        }

        return $this->render('admin/admin_info_candidat/edit.html.twig', [
            'info_admin_candidat' => $infoAdminCandidat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_info_candidat_delete", methods={"POST"})
     */
    public function delete(Request $request, InfoAdminCandidat $infoAdminCandidat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$infoAdminCandidat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($infoAdminCandidat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_info_candidat_index');
    }
}
