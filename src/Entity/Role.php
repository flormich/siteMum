<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class role
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

    /**
     * @ORM\ManyToMany(targetEntity=Users::class, mappedBy="role")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity=Users::class, mappedBy="roleUser")
     */
    private $roleUser;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->roleUser = new ArrayCollection();
    }

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

    /**
     * @return Collection|Users[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addRole($this);
        }

        return $this;
    }

    public function removeUser(Users $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeRole($this);
        }

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getRoleUser(): Collection
    {
        return $this->roleUser;
    }

    public function addRoleUser(Users $roleUser): self
    {
        if (!$this->roleUser->contains($roleUser)) {
            $this->roleUser[] = $roleUser;
            $roleUser->setRoleUser($this);
        }

        return $this;
    }

    public function removeRoleUser(Users $roleUser): self
    {
        if ($this->roleUser->removeElement($roleUser)) {
            // set the owning side to null (unless already changed)
            if ($roleUser->getRoleUser() === $this) {
                $roleUser->setRoleUser(null);
            }
        }

        return $this;
    }
}
