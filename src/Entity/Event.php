<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column(length: 255)]
    private ?string $titreevents = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descriptionevents = null;

    #[ORM\Column(length: 255)]
    private ?string $image1events = null;

    #[ORM\Column(length: 255)]
    private ?string $image2events = null;

    /**
     * @var Collection<int, Commentaire>
     */
    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'event')]
    private Collection $commentaires;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): static
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): static
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getTitreevents(): ?string
    {
        return $this->titreevents;
    }

    public function setTitreevents(string $titreevents): static
    {
        $this->titreevents = $titreevents;

        return $this;
    }

    public function getDescriptionevents(): ?string
    {
        return $this->descriptionevents;
    }

    public function setDescriptionevents(string $descriptionevents): static
    {
        $this->descriptionevents = $descriptionevents;

        return $this;
    }

    public function getImage1events(): ?string
    {
        return $this->image1events;
    }

    public function setImage1events(string $image1events): static
    {
        $this->image1events = $image1events;

        return $this;
    }

    public function getImage2events(): ?string
    {
        return $this->image2events;
    }

    public function setImage2events(string $image2events): static
    {
        $this->image2events = $image2events;

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): static
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setEvent($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getEvent() === $this) {
                $commentaire->setEvent(null);
            }
        }

        return $this;
    }
}
