<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titremsg = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionmsg = null;

    #[ORM\Column(length: 255)]
    private ?string $contenu = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $datemsg = null;

    /**
     * @var Collection<int, Reply>
     */
    #[ORM\OneToMany(targetEntity: Reply::class, mappedBy: 'message', cascade: ['remove'])]
    private Collection $replies;

    public function __construct()
    {
        $this->datemsg = new \DateTimeImmutable();
        $this->replies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitremsg(): ?string
    {
        return $this->titremsg;
    }

    public function setTitremsg(string $titremsg): static
    {
        $this->titremsg = $titremsg;

        return $this;
    }

    public function getDescriptionmsg(): ?string
    {
        return $this->descriptionmsg;
    }

    public function setDescriptionmsg(string $descriptionmsg): static
    {
        $this->descriptionmsg = $descriptionmsg;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatemsg(): ?\DateTimeInterface
    {
        return $this->datemsg;
    }

    public function setDatemsg(\DateTimeInterface $datemsg): static
    {
        $this->datemsg = $datemsg;

        return $this;
    }

    /**
     * @return Collection<int, Reply>
     */
    public function getReplies(): Collection
    {
        return $this->replies;
    }

    public function addReply(Reply $reply): static
    {
        if (!$this->replies->contains($reply)) {
            $this->replies->add($reply);
            $reply->setMessage($this);
        }

        return $this;
    }

    public function removeReply(Reply $reply): static
    {
        if ($this->replies->removeElement($reply)) {
            if ($reply->getMessage() === $this) {
                $reply->setMessage(null);
            }
        }

        return $this;
    }
}
