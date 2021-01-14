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
    private $banniere;

    /**
     * @ORM\Column(type="text")
     */
    private $presentation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $promotion;

    /**
     * @ORM\Column(type="text")
     */
    private $description_activite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_boutique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $top_vente_1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $top_vente_2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $top_vente_3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBanniere(): ?string
    {
        return $this->banniere;
    }

    public function setBanniere(string $banniere): self
    {
        $this->banniere = $banniere;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getPromotion(): ?string
    {
        return $this->promotion;
    }

    public function setPromotion(string $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function getDescriptionActivite(): ?string
    {
        return $this->description_activite;
    }

    public function setDescriptionActivite(string $description_activite): self
    {
        $this->description_activite = $description_activite;

        return $this;
    }

    public function getImageBoutique(): ?string
    {
        return $this->image_boutique;
    }

    public function setImageBoutique(string $image_boutique): self
    {
        $this->image_boutique = $image_boutique;

        return $this;
    }

    public function getTopVente1(): ?string
    {
        return $this->top_vente_1;
    }

    public function setTopVente1(string $top_vente_1): self
    {
        $this->top_vente_1 = $top_vente_1;

        return $this;
    }

    public function getTopVente2(): ?string
    {
        return $this->top_vente_2;
    }

    public function setTopVente2(string $top_vente_2): self
    {
        $this->top_vente_2 = $top_vente_2;

        return $this;
    }

    public function getTopVente3(): ?string
    {
        return $this->top_vente_3;
    }

    public function setTopVente3(string $top_vente_3): self
    {
        $this->top_vente_3 = $top_vente_3;

        return $this;
    }
}
