<?php

namespace App\Controller;

use App\Entity\Experience;

use DateTime;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Candidate;
use App\Entity\InfoAdminCandidat;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;
use App\Form\CandidateType;
use App\Form\InfoAdminCandidatType;
use App\Repository\CandidateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/candidate")
 */
class CandidateController extends AbstractController
{
    /**
     * @Route("/", name="candidate_index", methods={"GET"})
     */
    public function index(CandidateRepository $candidateRepository): Response
    {
        return $this->render('candidate/index.html.twig', [
            'candidates' => $candidateRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="candidate_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $candidate = new Candidate();
        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidate);
            $entityManager->flush();

            

            return $this->redirectToRoute('candidate_index');
        }

        return $this->render('candidate/new.html.twig', [
            'candidate' => $candidate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="candidate_show", methods={"GET"})
     */
    public function show(Candidate $candidate): Response
    {
        return $this->render('candidate/show.html.twig', [
            'candidate' => $candidate,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="candidate_edit", methods={"GET","POST"})
     */
    public function edit(Request $request,CandidateRepository $repo ,Candidate $candidate, SluggerInterface $slugger, $id, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);

      


        $dataCandidate = $candidate->toArray();
        $dataLength = count($dataCandidate);
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
           
            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
          
            $newPassword = $request->request->get('candidate')["user_id"]["plainPassword"]["first"];

            // encode the plain password
            $user = $candidate->getUserId();
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $newPassword
                )
            );
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidate);
            $entityManager->flush();
            // return $this->redirectToRoute('candidate_edit');
            return $this->redirectToRoute('candidate_edit', ['id' => $candidate->getId()]);
        }

        return $this->render('candidate/edit.html.twig', [
            'candidate' => $candidate,
            'form' => $form->createView(),
           'dataCandidate' => $dataCandidate,
            'dataLength' => $dataLength,
        ]);
    }

    /**
     * @Route("/{id}/delete", name="candidate_delete", methods={"GET"})
     */
    public function delete(Request $request, Candidate $candidate): Response
    {

        $infoAdminCandidat = $candidate->getInfoAdminCandidatId();
        $infoAdminCandidat->setDateDeleted(new DateTime());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($infoAdminCandidat);
        $entityManager->flush();
        // if ($this->isCsrfTokenValid('delete'.$candidate->getId(), $request->request->get('_token'))) {
        $entityManager->remove($candidate);
        $entityManager->flush();
          $session = new Session();
          $session->invalidate();
        

        return $this->redirectToRoute('app_logout');
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
