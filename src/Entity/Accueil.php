<?php

namespace App\Entity;

use App\Repository\AccueilRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccueilRepository::class)
 */
class Accueil
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
    private $bannière;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $navbarre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $men_img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $men_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $women_img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $women_text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBannière(): ?string
    {
        return $this->bannière;
    }

    public function setBannière(string $bannière): self
    {
        $this->bannière = $bannière;

        return $this;
    }

    public function getNavbarre(): ?string
    {
        return $this->navbarre;
    }

    public function setNavbarre(string $navbarre): self
    {
        $this->navbarre = $navbarre;

        return $this;
    }

    public function getMenImg(): ?string
    {
        return $this->men_img;
    }

    public function setMenImg(string $men_img): self
    {
        $this->men_img = $men_img;

        return $this;
    }

    public function getMenText(): ?string
    {
        return $this->men_text;
    }

    public function setMenText(string $men_text): self
    {
        $this->men_text = $men_text;

        return $this;
    }

    public function getWomenImg(): ?string
    {
        return $this->women_img;
    }

    public function setWomenImg(string $women_img): self
    {
        $this->women_img = $women_img;

        return $this;
    }

    public function getWomenText(): ?string
    {
        return $this->women_text;
    }

    public function setWomenText(string $women_text): self
    {
        $this->women_text = $women_text;

        return $this;
    }
}
