<?php

namespace App\Entity;

use App\Repository\ScrapsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScrapsRepository::class)
 */
class Scraps
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="date")
     */
    private $date_create;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_update;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $key_id;

    /**
     * @ORM\ManyToMany(targetEntity=theme::class)
     */
    private $theme_id;

    /**
     * @ORM\ManyToMany(targetEntity=link::class)
     */
    private $link_id;

    /**
     * @ORM\ManyToMany(targetEntity=key::class)
     */
    private $cle;

    public function __construct()
    {
        $this->theme_id = new ArrayCollection();
        $this->link_id = new ArrayCollection();
        $this->cle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDateCreate(): ?\DateTimeInterface
    {
        return $this->date_create;
    }

    public function setDateCreate(\DateTimeInterface $date_create): self
    {
        $this->date_create = $date_create;

        return $this;
    }

    public function getDateUpdate(): ?\DateTimeInterface
    {
        return $this->date_update;
    }

    public function setDateUpdate(?\DateTimeInterface $date_update): self
    {
        $this->date_update = $date_update;

        return $this;
    }

    public function getKeyId(): ?int
    {
        return $this->key_id;
    }

    public function setKeyId(?int $key_id): self
    {
        $this->key_id = $key_id;

        return $this;
    }

    /**
     * @return Collection|theme[]
     */
    public function getThemeId(): Collection
    {
        return $this->theme_id;
    }

    public function addThemeId(theme $themeId): self
    {
        if (!$this->theme_id->contains($themeId)) {
            $this->theme_id[] = $themeId;
        }

        return $this;
    }

    public function removeThemeId(theme $themeId): self
    {
        $this->theme_id->removeElement($themeId);

        return $this;
    }

    /**
     * @return Collection|link[]
     */
    public function getLinkId(): Collection
    {
        return $this->link_id;
    }

    public function addLinkId(link $linkId): self
    {
        if (!$this->link_id->contains($linkId)) {
            $this->link_id[] = $linkId;
        }

        return $this;
    }

    public function removeLinkId(link $linkId): self
    {
        $this->link_id->removeElement($linkId);

        return $this;
    }

    /**
     * @return Collection|key[]
     */
    public function getCle(): Collection
    {
        return $this->cle;
    }

    public function addCle(key $cle): self
    {
        if (!$this->cle->contains($cle)) {
            $this->cle[] = $cle;
        }

        return $this;
    }

    public function removeCle(key $cle): self
    {
        $this->cle->removeElement($cle);

        return $this;
    }
}
