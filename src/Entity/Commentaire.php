<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomcomment = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $timecomment = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text_commentaire = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Event $event = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomcomment(): ?string
    {
        return $this->nomcomment;
    }

    public function setNomcomment(string $nomcomment): static
    {
        $this->nomcomment = $nomcomment;

        return $this;
    }

    public function getTimecomment(): ?\DateTimeInterface
    {
        return $this->timecomment;
    }

    public function setTimecomment(\DateTimeInterface $timecomment): static
    {
        $this->timecomment = $timecomment;

        return $this;
    }

    public function getTextCommentaire(): ?string
    {
        return $this->text_commentaire;
    }

    public function setTextCommentaire(string $text_commentaire): static
    {
        $this->text_commentaire = $text_commentaire;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): static
    {
        $this->event = $event;

        return $this;
    }
}
