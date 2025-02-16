<?php

namespace App\Entity;

use App\Repository\ReponsesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponsesRepository::class)]
class Reponses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_Rep = null;

    #[ORM\Column(length: 255)]
    private ?string $Contenu_Rep = null;

    #[ORM\ManyToOne(inversedBy: 'reponses')]
    private ?Reclamation $ID_Rec = null;

    #[ORM\Column]
    private ?int $ID_Admin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRep(): ?\DateTimeInterface
    {
        return $this->Date_Rep;
    }

    public function setDateRep(\DateTimeInterface $Date_Rep): static
    {
        $this->Date_Rep = $Date_Rep;

        return $this;
    }

    public function getContenuRep(): ?string
    {
        return $this->Contenu_Rep;
    }

    public function setContenuRep(string $Contenu_Rep): static
    {
        $this->Contenu_Rep = $Contenu_Rep;

        return $this;
    }

    public function getIDRec(): ?Reclamation
    {
        return $this->ID_Rec;
    }

    public function setIDRec(?Reclamation $ID_Rec): static
    {
        $this->ID_Rec = $ID_Rec;

        return $this;
    }

    public function getIDAdmin(): ?int
    {
        return $this->ID_Admin;
    }

    public function setIDAdmin(int $ID_Admin): static
    {
        $this->ID_Admin = $ID_Admin;

        return $this;
    }
}
