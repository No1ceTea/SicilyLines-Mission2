<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipementRepository::class)
 */
class Equipement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=proposer::class, mappedBy="equipement")
     */
    private $proposers;

    public function __construct()
    {
        $this->proposers = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, proposer>
     */
    public function getProposers(): Collection
    {
        return $this->proposers;
    }

    public function addProposer(proposer $proposer): self
    {
        if (!$this->proposers->contains($proposer)) {
            $this->proposers[] = $proposer;
            $proposer->setEquipement($this);
        }

        return $this;
    }

    public function removeProposer(proposer $proposer): self
    {
        if ($this->proposers->removeElement($proposer)) {
            // set the owning side to null (unless already changed)
            if ($proposer->getEquipement() === $this) {
                $proposer->setEquipement(null);
            }
        }

        return $this;
    }
}
