<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Excursion
 *
 * @ORM\Table(name="excursion")
 * @ORM\Entity
 */
class Excursion
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdExcursion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexcursion;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeExcursion", type="string", length=150, nullable=false)
     */
    private $typeexcursion;

    /**
     * @var int
     *
     * @ORM\Column(name="NbPersonnes", type="integer", nullable=false)
     */
    private $nbpersonnes;

    /**
     * @var int
     *
     * @ORM\Column(name="PrixUnitaire", type="integer", nullable=false)
     */
    private $prixunitaire;

    public function getIdexcursion(): ?int
    {
        return $this->idexcursion;
    }

    public function getTypeexcursion(): ?string
    {
        return $this->typeexcursion;
    }

    public function setTypeexcursion(string $typeexcursion): self
    {
        $this->typeexcursion = $typeexcursion;

        return $this;
    }

    public function getNbpersonnes(): ?int
    {
        return $this->nbpersonnes;
    }

    public function setNbpersonnes(int $nbpersonnes): self
    {
        $this->nbpersonnes = $nbpersonnes;

        return $this;
    }

    public function getPrixunitaire(): ?int
    {
        return $this->prixunitaire;
    }

    public function setPrixunitaire(int $prixunitaire): self
    {
        $this->prixunitaire = $prixunitaire;

        return $this;
    }


}
