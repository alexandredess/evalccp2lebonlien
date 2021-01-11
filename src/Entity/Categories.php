<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
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
    private $Nom_categories;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategories(): ?string
    {
        return $this->Nom_categories;
    }

    public function setNomCategories(string $Nom_categories): self
    {
        $this->Nom_categories = $Nom_categories;

        return $this;
    }
}
