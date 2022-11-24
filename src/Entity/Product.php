<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProductRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 70)]
    #[Assert\NotBlank()]
    private ?string $name = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank()]
    private ?string $wording = null;

    #[ORM\Column(length: 300)]
    #[Assert\NotBlank()]
    private ?string $description = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank()]
    private ?string $supplier_reference = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 8, scale: 2)]
    #[Assert\NotNull()]
    #[Assert\Positive()]
    private ?string $price = null;

    #[ORM\Column(length: 255)]
    #[Assert\Image(
        minWidth: 200,
        maxWidth: 600,
        minHeight: 200,
        maxHeight: 600,
    )]
    #[Assert\NotBlank()]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getWording(): ?string
    {
        return $this->wording;
    }

    public function setWording(string $wording): self
    {
        $this->wording = $wording;

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

    public function getSupplierReference(): ?string
    {
        return $this->supplier_reference;
    }

    public function setSupplierReference(string $supplier_reference): self
    {
        $this->supplier_reference = $supplier_reference;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
