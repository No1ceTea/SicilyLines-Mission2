<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeRepository::class)
 */
class Type
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
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="type")
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity=tarifer::class, mappedBy="type")
     */
    private $tarifers;

    /**
     * @ORM\OneToMany(targetEntity=participer::class, mappedBy="type")
     */
    private $participers;

    public function __construct()
    {
        $this->tarifers = new ArrayCollection();
        $this->participers = new ArrayCollection();
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

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, tarifer>
     */
    public function getTarifer(): Collection
    {
        return $this->tarifer;
    }

    public function addTarifer(tarifer $tarifer): self
    {
        if (!$this->tarifers->contains($tarifer)) {
            $this->tarifers[] = $tarifer;
            $tarifer->setType($this);
        }

        return $this;
    }

    public function removeTarifer(tarifer $tarifer): self
    {
        if ($this->tarifer->removeElement($tarifer)) {
            // set the owning side to null (unless already changed)
            if ($tarifer->getType() === $this) {
                $tarifer->setType(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, participer>
     */
    public function getParticiper(): Collection
    {
        return $this->participer;
    }

    public function addParticiper(participer $participer): self
    {
        if (!$this->participer->contains($participer)) {
            $this->participer[] = $participer;
            $participer->setType($this);
        }

        return $this;
    }

    public function removeParticiper(participer $participer): self
    {
        if ($this->participer->removeElement($participer)) {
            // set the owning side to null (unless already changed)
            if ($participer->getType() === $this) {
                $participer->setType(null);
            }
        }

        return $this;
    }

}
