<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $duree = null;

    #[ORM\Column]
    private ?int $debut = null;

    #[ORM\Column]
    private ?int $jour = null;

    #[ORM\Column]
    private ?int $edt_id = null;

    #[ORM\Column]
    private ?int $enseignant_id = null;

    #[ORM\Column]
    private ?int $matiere_id = null;

    #[ORM\Column(length: 255)]
    private ?string $eleves = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDebut(): ?int
    {
        return $this->debut;
    }

    public function setDebut(int $debut): static
    {
        $this->debut = $debut;

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

    public function getEdtId(): ?int
    {
        return $this->edt_id;
    }

    public function setEdtId(int $edt_id): static
    {
        $this->edt_id = $edt_id;

        return $this;
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

    public function getMatiereId(): ?int
    {
        return $this->matiere_id;
    }

    public function setMatiereId(int $matiere_id): static
    {
        $this->matiere_id = $matiere_id;

        return $this;
    }

    public function getEleves(): ?string
    {
        return $this->eleves;
    }

    public function setEleves(string $eleves): static
    {
        $this->eleves = $eleves;

        return $this;
    }
}
