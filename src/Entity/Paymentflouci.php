<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Paymentflouci
 *
 * @ORM\Table(name="paymentflouci", indexes={@ORM\Index(name="FKs_client_ids", columns={"client_id"}), @ORM\Index(name="FKs_location_ids", columns={"location_id"})})
 * @ORM\Entity
 */
class Paymentflouci
{
    /**
     * @var int
     *
     * @ORM\Column(name="payment_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentId;

    /**
     * @var int
     *
     * @ORM\Column(name="location_id", type="bigint", nullable=false)
     */
    private $locationId;

    /**
     * @var int
     *
     * @ORM\Column(name="client_id", type="bigint", nullable=false)
     */
    private $clientId;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_id", type="string", length=50, nullable=false)
     */
    private $transactionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Payment_status", type="integer", nullable=true)
     */
    private $paymentStatus = '0';

    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    public function setLocationId(string $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getPaymentStatus(): ?int
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(?int $paymentStatus): self
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }


}
