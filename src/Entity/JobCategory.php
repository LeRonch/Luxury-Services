<?php

namespace App\Entity;

use App\Repository\JobCategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobCategoryRepository::class)
 */
class JobCategory
{


    const CAT = [
        0 => 'Commercial',
        1 => 'Retail sales',
        2 => 'Creative',
        3 => 'Technology',
        4 => 'Marketing & PR',
        5 => 'Fashion & luxury',
        6 => 'Management & HR',
    ];



    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job_category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobCategory(): ?string
    {
        return $this->job_category;
    }

    public function getJobCat(): string
    {
        return self::CAT[$this->CAT];
    }

    public function setJobCategory(string $job_category): self
    {
        $this->job_category = $job_category;

        return $this;
    }
    public function __toString()
{
    return (string) $this->getJobCategory();
}
}

