<?php

namespace App\Entity;

use App\Repository\ElevesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ElevesRepository::class)]
class Eleves
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_eleve = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_eleve = null;

    #[ORM\Column(length: 255)]
    private ?string $mail_eleve = null;

    #[ORM\Column]
    private ?int $class_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEleve(): ?string
    {
        return $this->nom_eleve;
    }

    public function setNomEleve(string $nom_eleve): static
    {
        $this->nom_eleve = $nom_eleve;

        return $this;
    }

    public function getPrenomEleve(): ?string
    {
        return $this->prenom_eleve;
    }

    public function setPrenomEleve(string $prenom_eleve): static
    {
        $this->prenom_eleve = $prenom_eleve;

        return $this;
    }

    public function getMailEleve(): ?string
    {
        return $this->mail_eleve;
    }

    public function setMailEleve(string $mail_eleve): static
    {
        $this->mail_eleve = $mail_eleve;

        return $this;
    }

    public function getClassId(): ?int
    {
        return $this->class_id;
    }

    public function setClassId(int $class_id): static
    {
        $this->class_id = $class_id;

        return $this;
    }
}
