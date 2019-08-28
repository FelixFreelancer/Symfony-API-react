<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MyjiscUsersCommunPreferenceRepository")
 */
class MyjiscUsersCommunicationPreference
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
    private $headlines_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $events_isChecked;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marketResearch_isChecked;

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

    public function getHeadlinesIsChecked(): ?string
    {
        return $this->headlines_isChecked;
    }

    public function setHeadlinesIsChecked(?string $headlines_isChecked): self
    {
        $this->headlines_isChecked = $headlines_isChecked;

        return $this;
    }

    public function getEventsIsChecked(): ?string
    {
        return $this->events_isChecked;
    }

    public function setEventsIsChecked(?string $events_isChecked): self
    {
        $this->events_isChecked = $events_isChecked;

        return $this;
    }

    public function getMarketResearchIsChecked(): ?string
    {
        return $this->marketResearch_isChecked;
    }

    public function setMarketResearchIsChecked(?string $marketResearch_isChecked): self
    {
        $this->marketResearch_isChecked = $marketResearch_isChecked;

        return $this;
    }
}
