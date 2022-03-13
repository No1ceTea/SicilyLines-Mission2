<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="IDX_42C8495519EB6921", columns={"client_id"}), @ORM\Index(name="IDX_42C84955A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_42C84955ED2BB15B", columns={"traversee_id"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code_reservation", type="string", length=10, nullable=false)
     */
    private $codeReservation;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Traversee
     *
     * @ORM\ManyToOne(targetEntity="Traversee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="traversee_id", referencedColumnName="id")
     * })
     */
    private $traversee;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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


}
