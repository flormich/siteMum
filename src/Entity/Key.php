<?php

namespace App\Entity;

use App\Repository\KeyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KeyRepository::class)
 * @ORM\Table(name="`key`")
 */
class Key
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
    private $name_key;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameKey(): ?string
    {
        return $this->name_key;
    }

    public function setNameKey(string $name_key): self
    {
        $this->name_key = $name_key;

        return $this;
    }
}
