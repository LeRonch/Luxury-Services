<?php

namespace App\Entity;

use App\Repository\InfoAdminCandidatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfoAdminCandidatRepository::class)
 */
class InfoAdminCandidat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $notes;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_deleted;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $files;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->date_created;
    }

    public function setDateCreated(\DateTimeInterface $date_created): self
    {
        $this->date_created = $date_created;

        return $this;
    }

    public function getDateDeleted(): ?\DateTimeInterface
    {
        return $this->date_deleted;
    }

    public function setDateDeleted(?\DateTimeInterface $date_deleted): self
    {
        $this->date_deleted = $date_deleted;

        return $this;
    }

    public function getFiles(): ?string
    {
        return $this->files;
    }

    public function setFiles(?string $files): self
    {
        $this->files = $files;

        return $this;
    }
}
