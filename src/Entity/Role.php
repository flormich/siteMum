<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role
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
    private $name_role;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $value_role;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameRole(): ?string
    {
        return $this->name_role;
    }

    public function setNameRole(string $name_role): self
    {
        $this->name_role = $name_role;

        return $this;
    }

    public function getValueRole(): ?string
    {
        return $this->value_role;
    }

    public function setValueRole(string $value_role): self
    {
        $this->value_role = $value_role;

        return $this;
    }
}
