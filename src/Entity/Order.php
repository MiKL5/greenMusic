<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $status = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $montant_tva = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $purchase_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $order_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $montant_ht = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $delivery_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $invoice_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $billing_adress = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: '0')]
    private ?string $billing_zipcode = null;

    #[ORM\Column(length: 50)]
    private ?string $billing_city = null;

    #[ORM\Column(length: 100)]
    private ?string $delivery_adress = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: '0')]
    private ?string $delivery_zipcode = null;

    #[ORM\Column(length: 50)]
    private ?string $delivery_city = null;

    #[ORM\Column(length: 20)]
    private ?string $order_number = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getMontantTva(): ?string
    {
        return $this->montant_tva;
    }

    public function setMontantTva(string $montant_tva): self
    {
        $this->montant_tva = $montant_tva;

        return $this;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchase_date;
    }

    public function setPurchaseDate(\DateTimeInterface $purchase_date): self
    {
        $this->purchase_date = $purchase_date;

        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->order_date;
    }

    public function setOrderDate(\DateTimeInterface $order_date): self
    {
        $this->order_date = $order_date;

        return $this;
    }

    public function getMontantHt(): ?\DateTimeInterface
    {
        return $this->montant_ht;
    }

    public function setMontantHt(\DateTimeInterface $montant_ht): self
    {
        $this->montant_ht = $montant_ht;

        return $this;
    }

    public function getDeliveryDate(): ?\DateTimeInterface
    {
        return $this->delivery_date;
    }

    public function setDeliveryDate(\DateTimeInterface $delivery_date): self
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

    public function getInvoiceDate(): ?\DateTimeInterface
    {
        return $this->invoice_date;
    }

    public function setInvoiceDate(\DateTimeInterface $invoice_date): self
    {
        $this->invoice_date = $invoice_date;

        return $this;
    }

    public function getBillingAdress(): ?\DateTimeInterface
    {
        return $this->billing_adress;
    }

    public function setBillingAdress(\DateTimeInterface $billing_adress): self
    {
        $this->billing_adress = $billing_adress;

        return $this;
    }

    public function getBillingZipcode(): ?string
    {
        return $this->billing_zipcode;
    }

    public function setBillingZipcode(string $billing_zipcode): self
    {
        $this->billing_zipcode = $billing_zipcode;

        return $this;
    }

    public function getBillingCity(): ?string
    {
        return $this->billing_city;
    }

    public function setBillingCity(string $billing_city): self
    {
        $this->billing_city = $billing_city;

        return $this;
    }

    public function getDeliveryAdress(): ?string
    {
        return $this->delivery_adress;
    }

    public function setDeliveryAdress(string $delivery_adress): self
    {
        $this->delivery_adress = $delivery_adress;

        return $this;
    }

    public function getDeliveryZipcode(): ?string
    {
        return $this->delivery_zipcode;
    }

    public function setDeliveryZipcode(string $delivery_zipcode): self
    {
        $this->delivery_zipcode = $delivery_zipcode;

        return $this;
    }

    public function getDeliveryCity(): ?string
    {
        return $this->delivery_city;
    }

    public function setDeliveryCity(string $delivery_city): self
    {
        $this->delivery_city = $delivery_city;

        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->order_number;
    }

    public function setOrderNumber(string $order_number): self
    {
        $this->order_number = $order_number;

        return $this;
    }
}
