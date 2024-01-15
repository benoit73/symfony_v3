<?php

namespace App\Entity;

use App\Repository\AbsenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AbsenceRepository::class)]
class Absence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_eleve = null;

    #[ORM\Column]
    private ?int $jour = null;

    #[ORM\Column]
    private ?int $heure = null;

    #[ORM\Column]
    private ?int $id_matiere = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEleve(): ?int
    {
        return $this->id_eleve;
    }

    public function setIdEleve(int $id_eleve): static
    {
        $this->id_eleve = $id_eleve;

        return $this;
    }

    public function getJour(): ?int
    {
        return $this->jour;
    }

    public function setJour(int $jour): static
    {
        $this->jour = $jour;

        return $this;
    }

    public function getHeure(): ?int
    {
        return $this->heure;
    }

    public function setHeure(int $heure): static
    {
        $this->heure = $heure;

        return $this;
    }

    public function getIdMatiere(): ?int
    {
        return $this->id_matiere;
    }

    public function setIdMatiere(int $id_matiere): static
    {
        $this->id_matiere = $id_matiere;

        return $this;
    }
}
