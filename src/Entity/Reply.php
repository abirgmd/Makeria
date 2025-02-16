<?php

namespace App\Entity;

use App\Repository\ReplyRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: ReplyRepository::class)]
class Reply
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Message::class, inversedBy: 'replies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Message $message = null;

    #[ORM\Column(length: 255)]
    private ?string $contenureply = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function setMessage(?Message $message): static
    {
        // Si la réponse est enlevée d'un message, on met à jour la relation
        if ($message !== $this->message) {
            $this->message = $message;
        }

        return $this;
    }

    public function getContenureply(): ?string
    {
        return $this->contenureply;
    }

    public function setContenureply(string $contenureply): static
    {
        $this->contenureply = $contenureply;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}