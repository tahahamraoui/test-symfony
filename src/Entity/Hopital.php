<?php

namespace App\Entity;

use App\Repository\HopitalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HopitalRepository::class)
 */
class Hopital
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
    private $nom_hopital;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_hopital;

    /**
     * @ORM\Column(type="integer")
     */
    private $telhopital;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etathopital;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomHopital(): ?string
    {
        return $this->nom_hopital;
    }

    public function setNomHopital(string $nom_hopital): self
    {
        $this->nom_hopital = $nom_hopital;

        return $this;
    }

    public function getAdresseHopital(): ?string
    {
        return $this->adresse_hopital;
    }

    public function setAdresseHopital(string $adresse_hopital): self
    {
        $this->adresse_hopital = $adresse_hopital;

        return $this;
    }

    public function getTelhopital(): ?int
    {
        return $this->telhopital;
    }

    public function setTelhopital(int $telhopital): self
    {
        $this->telhopital = $telhopital;

        return $this;
    }

    public function getEtathopital(): ?string
    {
        return $this->etathopital;
    }

    public function setEtathopital(string $etathopital): self
    {
        $this->etathopital = $etathopital;

        return $this;
    }
}
