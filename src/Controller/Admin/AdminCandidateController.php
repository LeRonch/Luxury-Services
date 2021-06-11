<?php

namespace App\Controller\Admin;

use App\Entity\Candidate;
use App\Form\Candidate1Type;
use App\Repository\CandidateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
/**
 * @Route("/admin/candidate")
 */
class AdminCandidateController extends AbstractController
{
    /**
     * @Route("/", name="admin_candidate_index", methods={"GET"})
     */
    public function index(CandidateRepository $candidateRepository): Response
    {
        return $this->render('admin/admin_candidate/index.html.twig', [
            'candidates' => $candidateRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_candidate_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $candidate = new Candidate();
        $form = $this->createForm(Candidate1Type::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidate);
            $entityManager->flush();

            return $this->redirectToRoute('admin_candidate_index');
        }

        return $this->render('admin/admin_candidate/new.html.twig', [
            'candidate' => $candidate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_candidate_show", methods={"GET"})
     */
    public function show(Candidate $candidate): Response
    {
        return $this->render('admin_candidate/show.html.twig', [
            'candidate' => $candidate,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_candidate_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Candidate $candidate, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(Candidate1Type::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cv = $form->get('cv')->getData();
            $profil = $form->get('profil_picture')->getData();
            $passport = $form->get('passport')->getData();

            if($cv != null){
                $candidate->setCv($this->uploadFile($cv, $slugger, 'cv_directory'));
            }

            if($profil != null){
                $candidate->setProfilPicture($this->uploadFile($profil, $slugger, 'profil_directory'));
            }

            if($passport != null){
                $candidate->setPassport($this->uploadFile($passport, $slugger, 'passport_directory'));
            }
           
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_candidate_index');
        }

        return $this->render('admin/admin_candidate/edit.html.twig', [
            'candidate' => $candidate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_candidate_delete", methods={"POST"})
     */
    public function delete(Request $request, Candidate $candidate): Response
    {
        if ($this->isCsrfTokenValid('delete'.$candidate->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($candidate);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_candidate_index');
    }

    public function uploadFile($file, $slugger, $targetDirectory){
        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            // this is needed to safely include the file name as part of the URL
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
            
            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter($targetDirectory),
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            return $newFilename;
        }   
    }
}
