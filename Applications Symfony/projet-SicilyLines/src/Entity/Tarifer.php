<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarifer
 *
 * @ORM\Table(name="tarifer", indexes={@ORM\Index(name="IDX_6904C4FFC54C8C93", columns={"type_id"}), @ORM\Index(name="IDX_6904C4FFED31185", columns={"liaison_id"}), @ORM\Index(name="IDX_6904C4FFF384C1CF", columns={"periode_id"})})
 * @ORM\Entity
 */
class Tarifer
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
     * @var float
     *
     * @ORM\Column(name="tarif", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarif;

    /**
     * @var \Type
     *
     * @ORM\ManyToOne(targetEntity="Type")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var \Liaison
     *
     * @ORM\ManyToOne(targetEntity="Liaison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="liaison_id", referencedColumnName="id")
     * })
     */
    private $liaison;

    /**
     * @var \Periode
     *
     * @ORM\ManyToOne(targetEntity="Periode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="periode_id", referencedColumnName="id")
     * })
     */
    private $periode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

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

    public function getPeriode(): ?Periode
    {
        return $this->periode;
    }

    public function setPeriode(?Periode $periode): self
    {
        $this->periode = $periode;

        return $this;
    }


}
