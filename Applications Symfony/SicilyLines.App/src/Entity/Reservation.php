<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $codeReservation;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="idReservation")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=Traversee::class, inversedBy="reservations")
     */
    private $traversee;

    /**
     * @ORM\OneToMany(targetEntity=Participer::class, mappedBy="reservation")
     */
    private $participers;

    public function __construct()
    {
        $this->traversees = new ArrayCollection();
        $this->clients = new ArrayCollection();
        $this->participers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeReservation(): ?string
    {
        return $this->codeReservation;
    }

    public function setCodeReservation(string $codeReservation): self
    {
        $this->codeReservation = $codeReservation;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getTraversee(): ?Traversee
    {
        return $this->traversee;
    }

    public function setTraversee(?Traversee $traversee): self
    {
        $this->traversee = $traversee;

        return $this;
    }

    public function getParticipers(): Collection
    {
        return $this->participers;
    }

    public function addParticiper(Participer $participer): self
    {
        if($this->participers = $participer){
            $this->participers[] = $participer;
            $participer->setReservation($this);
        }

        return $this;
    }


    public function removeParticiper(Participer $participer): self
    {
        if($this->participers = $participer){
            $this->participers[] = $participer;
            $participer->setReservation(null);
        }

        return $this;
    }


}
