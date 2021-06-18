<?php

namespace App\Entity;

use App\Repository\CandidateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidateRepository::class)
 */
class Candidate
{



    // const GENDER = [
    //     1 => 'Female',
    //     2 => 'Male',
    //     3 => 'Transgender',
    // ];



    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
* @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $passport;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cv;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profil_picture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $current_location;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_of_birth;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $place_or_birth;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Experience::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $experience_id;

    /**
     * @ORM\OneToOne(targetEntity=InfoAdminCandidat::class, cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $info_admin_candidat_id;

    /**
     * @ORM\OneToOne(targetEntity=JobCategory::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    private $job_category_id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="candidate", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_id;

 
 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getPassport(): ?string
    {
        return $this->passport;
    }

    public function setPassport(?string $passport): self
    {
        $this->passport = $passport;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(?string $cv): self
    {
        $this->cv = $cv;

        return $this;
    }

    public function getProfilPicture(): ?string
    {
        return $this->profil_picture;
    }

    public function setProfilPicture(?string $profil_picture): self
    {
        $this->profil_picture = $profil_picture;

        return $this;
    }

    public function getCurrentLocation(): ?string
    {
        return $this->current_location;
    }

    public function setCurrentLocation(string $current_location): self
    {
        $this->current_location = $current_location;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }

    public function getPlaceOrBirth(): ?string
    {
        return $this->place_or_birth;
    }

    public function setPlaceOrBirth(string $place_or_birth): self
    {
        $this->place_or_birth = $place_or_birth;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getExperienceId(): ?Experience
    {
        return $this->experience_id;
    }

    public function setExperienceId(?Experience $experience_id): self
    {
        $this->experience_id = $experience_id;

        return $this;
    }

    public function getInfoAdminCandidatId(): ?InfoAdminCandidat
    {
        return $this->info_admin_candidat_id;
    }

    public function setInfoAdminCandidatId(InfoAdminCandidat $info_admin_candidat_id): self
    {
        $this->info_admin_candidat_id = $info_admin_candidat_id;

        return $this;
    }

    public function getJobCategoryId(): ?JobCategory
    {
        return $this->job_category_id;
    }

    public function setJobCategoryId(JobCategory $job_category_id): self
    {
        $this->job_category_id = $job_category_id;

        return $this;
    }


    public function toArray(){
        return ['gender'=>$this->getGender(),
                'firstname'=>$this->getFirstName(), 
                'lastname'=>$this->getLastName(), 
                'adress' => $this->getAdress(), 
                'country' => $this->getCountry(),
                'nationality' => $this->getNationality(),
                'cv' => $this->getCv(),
                'profilPicture' => $this->getProfilPicture(),
                'currentLocation' => $this->getCurrentLocation(),
                'dateOfBirth' => $this->getDateOfBirth(),
                'placeOfBirth' => $this->getPlaceOrBirth(),
                'description' => $this->getDescription(),
                'experience' => $this->getExperienceId(),
                'jobCategory' => $this->getJobCategoryId(),
                'passport' => $this->getPassport()];
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
    public function isProfileComplete()
    {
        return $this->getProfileCompletionPercent() === 100;
    }

    public function getProfileCompletionPercent()
    {
        $filledFieldCount = 0;
        $fields = $this->toArray();

        foreach($fields as $field) {
            if (!empty($field)) {
                $filledFieldCount++;
            }
        }

        return $filledFieldCount * 100 / count($fields);
    }

    public function __toString()
    {
        return (string) $this->getInfoAdminCandidatId();
    }
}

