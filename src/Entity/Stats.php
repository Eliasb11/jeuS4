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

    /**
     * @ORM\Column(type="integer")
     */
    private $parties_en_cours;

    /**
     * @ORM\Column(type="integer")
     */
    private $parties_terminees;

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

    public function getPartiesEnCours(): ?int
    {
        return $this->parties_en_cours;
    }

    public function setPartiesEnCours(int $parties_en_cours): self
    {
        $this->parties_en_cours = $parties_en_cours;

        return $this;
    }

    public function getPartiesTerminees(): ?int
    {
        return $this->parties_terminees;
    }

    public function setPartiesTerminees(int $parties_terminees): self
    {
        $this->parties_terminees = $parties_terminees;

        return $this;
    }
}
