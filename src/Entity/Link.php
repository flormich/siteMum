<?php

namespace App\Entity;

use App\Repository\LinkRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LinkRepository::class)
 */
class Link
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_link;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name_link;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresseLink(): ?string
    {
        return $this->adresse_link;
    }

    public function setAdresseLink(string $adresse_link): self
    {
        $this->adresse_link = $adresse_link;

        return $this;
    }

    public function getNameLink(): ?string
    {
        return $this->name_link;
    }

    public function setNameLink(?string $name_link): self
    {
        $this->name_link = $name_link;

        return $this;
    }
}
