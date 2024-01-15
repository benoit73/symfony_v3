<?php

namespace App\Entity;

use App\Repository\EnseignantsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnseignantsRepository::class)]
class Enseignants
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_enseignant = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_enseignant = null;

    #[ORM\Column]
    private ?int $matiere_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEnseignant(): ?string
    {
        return $this->nom_enseignant;
    }

    public function setNomEnseignant(string $nom_enseignant): static
    {
        $this->nom_enseignant = $nom_enseignant;

        return $this;
    }

    public function getPrenomEnseignant(): ?string
    {
        return $this->prenom_enseignant;
    }

    public function setPrenomEnseignant(string $prenom_enseignant): static
    {
        $this->prenom_enseignant = $prenom_enseignant;

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
}
