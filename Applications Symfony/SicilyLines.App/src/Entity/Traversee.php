<?php

namespace App\Entity;

use App\Repository\TraverseeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TraverseeRepository::class)
 */
class Traversee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="time")
     */
    private $heure;

    /**
     * @ORM\ManyToOne(targetEntity=Bateau::class, inversedBy="traversees")
     */
    private $bateau;

    /**
     * @ORM\OneToMany(targetEntity=reservation::class, mappedBy="traversee")
     */
    private $reservations;

    /**
     * @ORM\ManyToOne(targetEntity=Liaison::class, inversedBy="traversees")
     */
    private $liaison;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
        $this->liaisons = new ArrayCollection();
        $this->bateaus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getBateau(): ?Bateau
    {
        return $this->bateau;
    }

    public function setBateau(?Bateau $bateau): self
    {
        $this->bateau = $bateau;

        return $this;
    }

    /**
     * @return Collection<int, reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setTraversee($this);
        }

        return $this;
    }

    public function removeReservation(reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getTraversee() === $this) {
                $reservation->setTraversee(null);
            }
        }

        return $this;
    }

    public function getLiaison(): ?Liaison
    {
        return $this->liaison;
    }

    public function setLiaison(?Liaison $liaison): self
    {
        $this->liaison = $liaison;

        return $this;
    }
}
