<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
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
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=contenir::class, mappedBy="categorie")
     */
    private $contenir;

    /**
     * @ORM\OneToMany(targetEntity=type::class, mappedBy="categorie")
     */
    private $type;

    public function __construct()
    {
        $this->contenir = new ArrayCollection();
        $this->type = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection<int, contenir>
     */
    public function getContenir(): Collection
    {
        return $this->contenir;
    }

    public function addContenir(contenir $contenir): self
    {
        if (!$this->contenir->contains($contenir)) {
            $this->contenir[] = $contenir;
            $contenir->setCategorie($this);
        }

        return $this;
    }

    public function removeContenir(contenir $contenir): self
    {
        if ($this->contenir->removeElement($contenir)) {
            // set the owning side to null (unless already changed)
            if ($contenir->getCategorie() === $this) {
                $contenir->setCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, type>
     */
    public function getType(): Collection
    {
        return $this->type;
    }

    public function addType(type $type): self
    {
        if (!$this->type->contains($type)) {
            $this->type[] = $type;
            $type->setCategorie($this);
        }

        return $this;
    }

    public function removeType(type $type): self
    {
        if ($this->type->removeElement($type)) {
            // set the owning side to null (unless already changed)
            if ($type->getCategorie() === $this) {
                $type->setCategorie(null);
            }
        }

        return $this;
    }
}
