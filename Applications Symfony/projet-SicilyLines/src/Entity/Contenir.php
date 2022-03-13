<?php

namespace App\Entity;

use App\Repository\ContenirRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContenirRepository::class)
 */
class Contenir
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbMax;

    /**
     * @ORM\OneToMany(targetEntity=Categorie::class, mappedBy="contenir")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity=Bateau::class, mappedBy="contenir")
     */
    private $bateaus;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->bateaus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbMax(): ?int
    {
        return $this->nbMax;
    }

    public function setNbMax(int $nbMax): self
    {
        $this->nbMax = $nbMax;

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->setContenir($this);
        }

        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getContenir() === $this) {
                $category->setContenir(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Bateau>
     */
    public function getBateaus(): Collection
    {
        return $this->bateaus;
    }

    public function addBateau(Bateau $bateau): self
    {
        if (!$this->bateaus->contains($bateau)) {
            $this->bateaus[] = $bateau;
            $bateau->setContenir($this);
        }

        return $this;
    }

    public function removeBateau(Bateau $bateau): self
    {
        if ($this->bateaus->removeElement($bateau)) {
            // set the owning side to null (unless already changed)
            if ($bateau->getContenir() === $this) {
                $bateau->setContenir(null);
            }
        }

        return $this;
    }
}
