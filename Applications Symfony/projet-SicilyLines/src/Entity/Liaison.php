<?php

namespace App\Entity;

use App\Repository\LiaisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LiaisonRepository::class)
 */
class Liaison
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
    private $duree;

    /**
     * @ORM\ManyToOne(targetEntity=Tarifer::class, inversedBy="liaisons")
     */
    private $tarifer;

    /**
     * @ORM\ManyToOne(targetEntity=Secteur::class, inversedBy="Liaison")
     */
    private $secteur;

    /**
     * @ORM\OneToMany(targetEntity=Traversee::class, mappedBy="liaison")
     */
    private $Traversee;

    /**
     * @ORM\ManyToOne(targetEntity=Port::class, inversedBy="liaisons")
     */
    private $PortArrive;

    /**
     * @ORM\ManyToOne(targetEntity=Port::class, inversedBy="liaisonDepart")
     */
    private $portDepart;

    public function __construct()
    {
        $this->Traversee = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getTarifer(): ?Tarifer
    {
        return $this->tarifer;
    }

    public function setTarifer(?Tarifer $tarifer): self
    {
        $this->tarifer = $tarifer;

        return $this;
    }

    public function getSecteur(): ?Secteur
    {
        return $this->secteur;
    }

    public function setSecteur(?Secteur $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * @return Collection<int, Traversee>
     */
    public function getTraversee(): Collection
    {
        return $this->Traversee;
    }

    public function addTraversee(Traversee $traversee): self
    {
        if (!$this->Traversee->contains($traversee)) {
            $this->Traversee[] = $traversee;
            $traversee->setLiaison($this);
        }

        return $this;
    }

    public function removeTraversee(Traversee $traversee): self
    {
        if ($this->Traversee->removeElement($traversee)) {
            // set the owning side to null (unless already changed)
            if ($traversee->getLiaison() === $this) {
                $traversee->setLiaison(null);
            }
        }

        return $this;
    }

    public function getPortArrive(): ?Port
    {
        return $this->PortArrive;
    }

    public function setPortArrive(?Port $PortArrive): self
    {
        $this->PortArrive = $PortArrive;

        return $this;
    }

    public function getPortDepart(): ?Port
    {
        return $this->portDepart;
    }

    public function setPortDepart(?Port $portDepart): self
    {
        $this->portDepart = $portDepart;

        return $this;
    }
}
