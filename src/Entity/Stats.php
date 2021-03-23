<?php

namespace App\Entity;

use App\Repository\StatsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatsRepository::class)
 */
class Stats
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="integer")
     */
    private $victoire;

    /**
     * @ORM\Column(type="integer")
     */
    private $defaite;

    /**
     * @ORM\Column(type="integer")
     */
    private $parties;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getVictoire(): ?int
    {
        return $this->victoire;
    }

    public function setVictoire(int $victoire): self
    {
        $this->victoire = $victoire;

        return $this;
    }

    public function getDefaite(): ?int
    {
        return $this->defaite;
    }

    public function setDefaite(int $defaite): self
    {
        $this->defaite = $defaite;

        return $this;
    }

    public function getParties(): ?int
    {
        return $this->parties;
    }

    public function setParties(int $parties): self
    {
        $this->parties = $parties;

        return $this;
    }
}
