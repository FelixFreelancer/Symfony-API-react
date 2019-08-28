<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MyjiscUsersInterestsRepository")
 */
class MyjiscUsersInterests
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $user_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $higherEducation_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $furtherEducation_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $research_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $curriculum_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $itNetworks_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libraries_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rdActivity_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productsService_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $advice_guidance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(?int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getHigherEducationIsChecked(): ?string
    {
        return $this->higherEducation_isChecked;
    }

    public function setHigherEducationIsChecked(?string $higherEducation_isChecked): self
    {
        $this->higherEducation_isChecked = $higherEducation_isChecked;

        return $this;
    }

    public function getFurtherEducationIsChecked(): ?string
    {
        return $this->furtherEducation_isChecked;
    }

    public function setFurtherEducationIsChecked(?string $furtherEducation_isChecked): self
    {
        $this->furtherEducation_isChecked = $furtherEducation_isChecked;

        return $this;
    }

    public function getResearchIsChecked(): ?string
    {
        return $this->research_isChecked;
    }

    public function setResearchIsChecked(?string $research_isChecked): self
    {
        $this->research_isChecked = $research_isChecked;

        return $this;
    }

    public function getCurriculumIsChecked(): ?string
    {
        return $this->curriculum_isChecked;
    }

    public function setCurriculumIsChecked(?string $curriculum_isChecked): self
    {
        $this->curriculum_isChecked = $curriculum_isChecked;

        return $this;
    }

    public function getItNetworksIsChecked(): ?string
    {
        return $this->itNetworks_isChecked;
    }

    public function setItNetworksIsChecked(?string $itNetworks_isChecked): self
    {
        $this->itNetworks_isChecked = $itNetworks_isChecked;

        return $this;
    }

    public function getLibrariesIsChecked(): ?string
    {
        return $this->libraries_isChecked;
    }

    public function setLibrariesIsChecked(?string $libraries_isChecked): self
    {
        $this->libraries_isChecked = $libraries_isChecked;

        return $this;
    }

    public function getRdActivityIsChecked(): ?string
    {
        return $this->rdActivity_isChecked;
    }

    public function setRdActivityIsChecked(?string $rdActivity_isChecked): self
    {
        $this->rdActivity_isChecked = $rdActivity_isChecked;

        return $this;
    }

    public function getProductsServiceIsChecked(): ?string
    {
        return $this->productsService_isChecked;
    }

    public function setProductsServiceIsChecked(?string $productsService_isChecked): self
    {
        $this->productsService_isChecked = $productsService_isChecked;

        return $this;
    }

    public function getAdviceGuidance(): ?string
    {
        return $this->advice_guidance;
    }

    public function setAdviceGuidance(?string $advice_guidance): self
    {
        $this->advice_guidance = $advice_guidance;

        return $this;
    }

}
