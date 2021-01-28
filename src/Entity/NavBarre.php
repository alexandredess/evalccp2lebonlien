<?php

namespace App\Entity;

use App\Repository\NavBarreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NavBarreRepository::class)
 */
class NavBarre
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
    private $nom;

    /**
     * @ORM\Column(type="boolean")
     */
    private $affiche;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAffiche(): ?bool
    {
        return $this->affiche;
    }

    public function setAffiche(bool $affiche): self
    {
        $this->affiche = $affiche;

        return $this;
    }
}
