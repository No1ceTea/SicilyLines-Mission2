<?php

namespace App\Entity;

use App\Repository\BateauRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BateauRepository::class)
 */
class Bateau
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    private $longueur;

    /**
     * @ORM\Column(type="float")
     */
    private $largeur;

    /**
     * @ORM\Column(type="float")
     */
    private $vitesse;

    /**
     * @ORM\OneToMany(targetEntity=proposer::class, mappedBy="bateau")
     */
    private $proposer;

    /**
     * @ORM\OneToMany(targetEntity=traversee::class, mappedBy="bateau")
     */
    private $traversees;

    /**
     * @ORM\OneToMany(targetEntity=contenir::class, mappedBy="bateau")
     */
    private $contenir;

    public function __construct()
    {
        $this->proposer = new ArrayCollection();
        $this->traversees = new ArrayCollection();
        $this->contenir = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLongueur(): ?float
    {
        return $this->longueur;
    }

    public function setLongueur(float $longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getLargeur(): ?float
    {
        return $this->largeur;
    }

    public function setLargeur(float $largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function getVitesse(): ?float
    {
        return $this->vitesse;
    }

    public function setVitesse(float $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * @return Collection<int, proposer>
     */
    public function getProposer(): Collection
    {
        return $this->proposer;
    }

    public function addProposer(proposer $proposer): self
    {
        if (!$this->proposer->contains($proposer)) {
            $this->proposer[] = $proposer;
            $proposer->setBateau($this);
        }

        return $this;
    }

    public function removeProposer(proposer $proposer): self
    {
        if ($this->proposer->removeElement($proposer)) {
            // set the owning side to null (unless already changed)
            if ($proposer->getBateau() === $this) {
                $proposer->setBateau(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, traversee>
     */
    public function getTraversees(): Collection
    {
        return $this->traversees;
    }

    public function addTraversee(traversee $traversee): self
    {
        if (!$this->traversees->contains($traversee)) {
            $this->traversees[] = $traversee;
            $traversee->setBateau($this);
        }

        return $this;
    }

    public function removeTraversee(traversee $traversee): self
    {
        if ($this->traversees->removeElement($traversee)) {
            // set the owning side to null (unless already changed)
            if ($traversee->getBateau() === $this) {
                $traversee->setBateau(null);
            }
        }

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
            $contenir->setBateau($this);
        }

        return $this;
    }

    public function removeContenir(contenir $contenir): self
    {
        if ($this->contenir->removeElement($contenir)) {
            // set the owning side to null (unless already changed)
            if ($contenir->getBateau() === $this) {
                $contenir->setBateau(null);
            }
        }

        return $this;
    }

}
