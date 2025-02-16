<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_Rec = null;

    #[ORM\Column(length: 255)]
    private ?string $Images_Reclamation1 = null;

    #[ORM\Column(length: 255)]
    private ?string $Images_Reclamation2 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description_Rec = null;

    #[ORM\Column(length: 255)]
    private ?string $Stat_Rec = null;

    #[ORM\Column]
    private ?int $ID_Article = null;

    #[ORM\Column]
    private ?int $ID_Utilisateur = null;

    /**
     * @var Collection<int, Reponses>
     */
    #[ORM\OneToMany(targetEntity: Reponses::class, mappedBy: 'ID_Rec')]
    private Collection $reponses;

    public function __construct()
    {
        $this->reponses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRec(): ?\DateTimeInterface
    {
        return $this->Date_Rec;
    }

    public function setDateRec(\DateTimeInterface $Date_Rec): static
    {
        $this->Date_Rec = $Date_Rec;

        return $this;
    }

    public function getImagesReclamation1(): ?string
    {
        return $this->Images_Reclamation1;
    }

    public function setImagesReclamation1(string $Images_Reclamation1): static
    {
        $this->Images_Reclamation1 = $Images_Reclamation1;

        return $this;
    }

    public function getImagesReclamation2(): ?string
    {
        return $this->Images_Reclamation2;
    }

    public function setImagesReclamation2(string $Images_Reclamation2): static
    {
        $this->Images_Reclamation2 = $Images_Reclamation2;

        return $this;
    }

    public function getDescriptionRec(): ?string
    {
        return $this->Description_Rec;
    }

    public function setDescriptionRec(string $Description_Rec): static
    {
        $this->Description_Rec = $Description_Rec;

        return $this;
    }

    public function getStatRec(): ?string
    {
        return $this->Stat_Rec;
    }

    public function setStatRec(string $Stat_Rec): static
    {
        $this->Stat_Rec = $Stat_Rec;

        return $this;
    }

    public function getIDArticle(): ?int
    {
        return $this->ID_Article;
    }

    public function setIDArticle(int $ID_Article): static
    {
        $this->ID_Article = $ID_Article;

        return $this;
    }

    public function getIDUtilisateur(): ?int
    {
        return $this->ID_Utilisateur;
    }

    public function setIDUtilisateur(int $ID_Utilisateur): static
    {
        $this->ID_Utilisateur = $ID_Utilisateur;

        return $this;
    }

    /**
     * @return Collection<int, Reponses>
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponses $reponse): static
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setIDRec($this);
        }

        return $this;
    }

    public function removeReponse(Reponses $reponse): static
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getIDRec() === $this) {
                $reponse->setIDRec(null);
            }
        }

        return $this;
    }
}
