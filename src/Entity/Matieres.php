<?php

namespace App\Entity;

use App\Repository\MatieresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatieresRepository::class)]
class Matieres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_matiere = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMatiere(): ?string
    {
        return $this->nom_matiere;
    }

    public function setNomMatiere(string $nom_matiere): static
    {
        $this->nom_matiere = $nom_matiere;

        return $this;
    }
}
