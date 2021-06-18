<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatureRepository::class)
 */
class Candidature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=JobOffer::class, cascade={"remove"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $id_offer;

    /**
     * @ORM\ManyToOne(targetEntity=Candidate::class, cascade={"remove"})
     * * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $id_candidat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOffer(): ?JobOffer
    {
        return $this->id_offer;
    }

    public function setIdOffer(JobOffer $id_offer): self
    {
        $this->id_offer = $id_offer;

        return $this;
    }

    public function getIdCandidat(): ?Candidate
    {
        return $this->id_candidat;
    }

    public function setIdCandidat(?Candidate $id_candidat): self
    {
        $this->id_candidat = $id_candidat;

        return $this;
    }
}
