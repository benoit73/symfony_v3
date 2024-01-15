<?php

namespace App\Entity;

use App\Repository\EnseignantClasseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnseignantClasseRepository::class)]
class EnseignantClasse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $enseignant_id = null;

    #[ORM\Column]
    private ?int $classe_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnseignantId(): ?int
    {
        return $this->enseignant_id;
    }

    public function setEnseignantId(int $enseignant_id): static
    {
        $this->enseignant_id = $enseignant_id;

        return $this;
    }

    public function getClasseId(): ?int
    {
        return $this->classe_id;
    }

    public function setClasseId(int $classe_id): static
    {
        $this->classe_id = $classe_id;

        return $this;
    }
}
