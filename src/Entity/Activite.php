<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdActivite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactivite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomActivite", type="string", length=255, nullable=true)
     */
    private $nomactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="ImageActivite", type="blob", length=65535, nullable=false)
     */
    private $imageactivite = '';

    /**
     * @var float
     *
     * @ORM\Column(name="PrixActivite", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixactivite;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeActivite", type="string", length=255, nullable=false)
     */
    private $typeactivite;

    public function getIdactivite(): ?int
    {
        return $this->idactivite;
    }

    public function getNomactivite(): ?string
    {
        return $this->nomactivite;
    }

    public function setNomactivite(?string $nomactivite): self
    {
        $this->nomactivite = $nomactivite;

        return $this;
    }

    public function getImageactivite()
    {
        return $this->imageactivite;
    }

    public function setImageactivite($imageactivite): self
    {
        $this->imageactivite = $imageactivite;

        return $this;
    }

    public function getPrixactivite(): ?float
    {
        return $this->prixactivite;
    }

    public function setPrixactivite(float $prixactivite): self
    {
        $this->prixactivite = $prixactivite;

        return $this;
    }

    public function getTypeactivite(): ?string
    {
        return $this->typeactivite;
    }

    public function setTypeactivite(string $typeactivite): self
    {
        $this->typeactivite = $typeactivite;

        return $this;
    }


}
