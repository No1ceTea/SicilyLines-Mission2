<?php

namespace App\Entity;

use App\Repository\PortRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PortRepository::class)
 */
class Port
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
     * @ORM\OneToMany(targetEntity=Liaison::class, mappedBy="portArrivee")
     */
    private $liaisonsA;

    /**
     * @ORM\OneToMany(targetEntity=liaison::class, mappedBy="port")
     */
    private $liasonsD;

    public function __construct()
    {
        $this->liaisonsD = new ArrayCollection();
        $this->liaisonsA = new ArrayCollection();
        $this->liasonsD = new ArrayCollection();
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


    //Liaison départ
    /**
     * @return Collection<int, Liaison>
     */
    public function getLiaisonsD(): Collection
    {
        return $this->liaisonsD;
    }

    public function addLiaisonD(Liaison $liaisonsD): self
    {
        if (!$this->liaisonsD->contains($liaisonsD)) {
            $this->liaisonsD[] = $liaisonsD;
            $liaisonsD->setPortDepart($this);
        }

        return $this;
    }

    public function removeLiaisonD(Liaison $liaisonsD): self
    {
        if ($this->liaisons->removeElement($liaisonsD)) {
            // set the owning side to null (unless already changed)
            if ($liaisonsD->getPortDepart() === $this) {
                $liaisonsD->setPortDepart(null);
            }
        }

        return $this;
    }


    //Liaison arrivee
    /**
     * @return Collection<int, Liaison>
     */
    public function getLiaisonsA(): Collection
    {
        return $this->liaisonsA;
    }

    public function addLiaisonA(Liaison $liaisonsA): self
    {
        if (!$this->liaisonsA->contains($liaisonsA)) {
            $this->liaisonsA[] = $liaisonsA;
            $liaisonsA->setPortArrivee($this);
        }

        return $this;
    }

    public function removeLiaisonA(Liaison $liaisonsA): self
    {
        if ($this->liaisons->removeElement($liaisonsA)) {
            // set the owning side to null (unless already changed)
            if ($liaisonsA->getPortArrivee() === $this) {
                $liaisonsA->setPortArrivee(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
    }
}
