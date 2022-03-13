<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proposer
 *
 * @ORM\Table(name="proposer", indexes={@ORM\Index(name="IDX_21866C15806F0F5C", columns={"equipement_id"}), @ORM\Index(name="IDX_21866C15A9706509", columns={"bateau_id"})})
 * @ORM\Entity
 */
class Proposer
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
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \Equipement
     *
     * @ORM\ManyToOne(targetEntity="Equipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipement_id", referencedColumnName="id")
     * })
     */
    private $equipement;

    /**
     * @var \Bateau
     *
     * @ORM\ManyToOne(targetEntity="Bateau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bateau_id", referencedColumnName="id")
     * })
     */
    private $bateau;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getEquipement(): ?Equipement
    {
        return $this->equipement;
    }

    public function setEquipement(?Equipement $equipement): self
    {
        $this->equipement = $equipement;

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


}
