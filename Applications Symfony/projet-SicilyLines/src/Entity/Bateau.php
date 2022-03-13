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
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $largeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vitesse;

    /**
     * @ORM\ManyToOne(targetEntity=Contenir::class, inversedBy="bateaus")
     */
    private $contenir;

    /**
     * @ORM\ManyToOne(targetEntity=Proposer::class, inversedBy="bateaus")
     */
    private $proposer;

    /**
     * @ORM\OneToMany(targetEntity=Traversee::class, mappedBy="Bateau")
     */
    private $traversees;

    public function __construct()
    {
        $this->traversees = new ArrayCollection();
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

    public function getLongueur(): ?string
    {
        return $this->longueur;
    }

    public function setLongueur(string $longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getLargeur(): ?string
    {
        return $this->largeur;
    }

    public function setLargeur(string $largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function getVitesse(): ?string
    {
        return $this->vitesse;
    }

    public function setVitesse(string $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getContenir(): ?Contenir
    {
        return $this->contenir;
    }

    public function setContenir(?Contenir $contenir): self
    {
        $this->contenir = $contenir;

        return $this;
    }

    public function getProposer(): ?Proposer
    {
        return $this->proposer;
    }

    public function setProposer(?Proposer $proposer): self
    {
        $this->proposer = $proposer;

        return $this;
    }

    /**
     * @return Collection<int, Traversee>
     */
    public function getTraversees(): Collection
    {
        return $this->traversees;
    }

    public function addTraversee(Traversee $traversee): self
    {
        if (!$this->traversees->contains($traversee)) {
            $this->traversees[] = $traversee;
            $traversee->setBateau($this);
        }

        return $this;
    }

    public function removeTraversee(Traversee $traversee): self
    {
        if ($this->traversees->removeElement($traversee)) {
            // set the owning side to null (unless already changed)
            if ($traversee->getBateau() === $this) {
                $traversee->setBateau(null);
            }
        }

        return $this;
    }
}
