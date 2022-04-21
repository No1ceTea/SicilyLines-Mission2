<?php

namespace App\Entity;

use App\Repository\PeriodeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PeriodeRepository::class)
 */
class Periode
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
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\OneToMany(targetEntity=tarifer::class, mappedBy="periode")
     */
    private $tarifer;

    public function __construct()
    {
        $this->tarifer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

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
            $tarifer->setPeriode($this);
        }

        return $this;
    }

    public function removeTarifer(tarifer $tarifer): self
    {
        if ($this->tarifer->removeElement($tarifer)) {
            // set the owning side to null (unless already changed)
            if ($tarifer->getPeriode() === $this) {
                $tarifer->setPeriode(null);
            }
        }

        return $this;
    }
}
