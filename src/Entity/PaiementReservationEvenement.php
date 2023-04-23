<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiementReservationEvenement
 *
 * @ORM\Table(name="paiement_reservation_evenement", indexes={@ORM\Index(name="fk_id_r", columns={"id_reservation"}), @ORM\Index(name="fk_id", columns={"id_evenement"})})
 * @ORM\Entity
 */
class PaiementReservationEvenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paiement_reservation_evenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaiementReservationEvenement;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=30, nullable=false)
     */
    private $description;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evenement", referencedColumnName="id_evenement")
     * })
     */
    private $idEvenement;

    /**
     * @var \ReservationEvenement
     *
     * @ORM\ManyToOne(targetEntity="ReservationEvenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reservation", referencedColumnName="id_reservation")
     * })
     */
    private $idReservation;

    public function getIdPaiementReservationEvenement(): ?int
    {
        return $this->idPaiementReservationEvenement;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdEvenement(): ?Evenement
    {
        return $this->idEvenement;
    }

    public function setIdEvenement(?Evenement $idEvenement): self
    {
        $this->idEvenement = $idEvenement;

        return $this;
    }

    public function getIdReservation(): ?ReservationEvenement
    {
        return $this->idReservation;
    }

    public function setIdReservation(?ReservationEvenement $idReservation): self
    {
        $this->idReservation = $idReservation;

        return $this;
    }


}
