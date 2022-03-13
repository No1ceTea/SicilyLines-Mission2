<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traversee
 *
 * @ORM\Table(name="traversee", indexes={@ORM\Index(name="IDX_B688F501A9706509", columns={"bateau_id"}), @ORM\Index(name="IDX_B688F501ED31185", columns={"liaison_id"})})
 * @ORM\Entity
 */
class Traversee
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var \Bateau
     *
     * @ORM\ManyToOne(targetEntity="Bateau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bateau_id", referencedColumnName="id")
     * })
     */
    private $bateau;

    /**
     * @var \Liaison
     *
     * @ORM\ManyToOne(targetEntity="Liaison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="liaison_id", referencedColumnName="id")
     * })
     */
    private $liaison;

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

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(string $heure): self
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
