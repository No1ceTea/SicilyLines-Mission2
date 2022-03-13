<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteur
 *
 * @ORM\Table(name="secteur", indexes={@ORM\Index(name="IDX_8045251FED31185", columns={"liaison_id"})})
 * @ORM\Entity
 */
class Secteur
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
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

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
