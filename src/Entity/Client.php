<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $society_name;

    /**
     * @ORM\OneToOne(targetEntity=InfoAdminClient::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $info_admin_client_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocietyName(): ?string
    {
        return $this->society_name;
    }

    public function setSocietyName(string $society_name): self
    {
        $this->society_name = $society_name;

        return $this;
    }

    public function getInfoAdminClientId(): ?InfoAdminClient
    {
        return $this->info_admin_client_id;
    }

    public function setInfoAdminClientId(InfoAdminClient $info_admin_client_id): self
    {
        $this->info_admin_client_id = $info_admin_client_id;

        return $this;
    }

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(string $activity): self
    {
        $this->activity = $activity;

        return $this;
    }

    public function __toString()
{
    return (string) $this->getId();
    
}

}
