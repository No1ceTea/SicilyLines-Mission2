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
     * @ORM\Column(type="time")
     */
    private $duree;

    /**
     * @ORM\OneToMany(targetEntity=tarifer::class, mappedBy="liaison")
     */
    private $tarifer;

    /**
     * @ORM\ManyToOne(targetEntity=port::class, inversedBy="liaisons")
     */
    private $portArrivee;

    /**
     * @ORM\ManyToOne(targetEntity=port::class, inversedBy="liaisons")
     */
    private $portDepart;

    /**
     * @ORM\OneToMany(targetEntity=secteur::class, mappedBy="liaison")
     */
    private $secteur;

    /**
     * @ORM\OneToMany(targetEntity=traversee::class, mappedBy="liaison")
     */
    private $traversees;

    /**
     * @ORM\ManyToOne(targetEntity=Port::class, inversedBy="liasonsD")
     */
    private $port;

    public function __construct()
    {
        $this->tarifer = new ArrayCollection();
        $this->secteur = new ArrayCollection();
        $this->traversees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

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
        if (!$this->tarifer->contains($tarifer)) {
            $this->tarifer[] = $tarifer;
            $tarifer->setLiaison($this);
        }

        return $this;
    }

    public function removeTarifer(tarifer $tarifer): self
    {
        if ($this->tarifer->removeElement($tarifer)) {
            // set the owning side to null (unless already changed)
            if ($tarifer->getLiaison() === $this) {
                $tarifer->setLiaison(null);
            }
        }

        return $this;
    }

    public function getPortArrivee(): ?port
    {
        return $this->portArrivee;
    }

    public function setPortArrivee(?port $portArrivee): self
    {
        $this->portArrivee = $portArrivee;

        return $this;
    }

    public function getPortDepart(): ?port
    {
        return $this->portDepart;
    }

    public function setPortDepart(?port $portDepart): self
    {
        $this->portDepart = $portDepart;

        return $this;
    }

    /**
     * @return Collection<int, secteur>
     */
    public function getSecteur(): Collection
    {
        return $this->secteur;
    }

    public function addSecteur(secteur $secteur): self
    {
        if (!$this->secteur->contains($secteur)) {
            $this->secteur[] = $secteur;
            $secteur->setLiaison($this);
        }

        return $this;
    }

    public function removeSecteur(secteur $secteur): self
    {
        if ($this->secteur->removeElement($secteur)) {
            // set the owning side to null (unless already changed)
            if ($secteur->getLiaison() === $this) {
                $secteur->setLiaison(null);
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
            $traversee->setLiaison($this);
        }

        return $this;
    }

    public function removeTraversee(traversee $traversee): self
    {
        if ($this->traversees->removeElement($traversee)) {
            // set the owning side to null (unless already changed)
            if ($traversee->getLiaison() === $this) {
                $traversee->setLiaison(null);
            }
        }

        return $this;
    }

    public function getPort(): ?Port
    {
        return $this->port;
    }

    public function setPort(?Port $port): self
    {
        $this->port = $port;

        return $this;
    }
}
