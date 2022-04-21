<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
     * @ORM\Column(type="string", length=10)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="client")
     */
    private $idReservation;

    public function __construct()
    {
        $this->Reservation = new ArrayCollection();
        $this->idReservation = new ArrayCollection();

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

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getIdReservation(): Collection
    {
        return $this->idReservation;
    }

    public function addIdReservation(Reservation $idReservation): self
    {
        if (!$this->idReservation->contains($idReservation)) {
            $this->idReservation[] = $idReservation;
            $idReservation->setClient($this);
        }

        return $this;
    }

    public function removeIdReservation(Reservation $idReservation): self
    {
        if ($this->idReservation->removeElement($idReservation)) {
            // set the owning side to null (unless already changed)
            if ($idReservation->getClient() === $this) {
                $idReservation->setClient(null);
            }
        }

        return $this;
    }

        /**
     * @return Collection|Reservation[]
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(reservation $reservation): self
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation[] = $reservation;
            $reservation->setClient($this);
        }

        return $this;
    }

    public function removeReservation(reservation $reservation): self
    {
        if ($this->reservation->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getClient() === $this) {
                $reservation->setClient(null);
            }
        }

        return $this;
    }
}
