<?php

namespace Boris\ProductServiceSdk\Model;

class ProductPrice
{
    private ?string $id = null;
    private ?\DateTimeInterface $validFrom = null;
    private ?\DateTimeInterface $validTo = null;
    private ?string $price = null;
    private int $version;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): ProductPrice
    {
        $this->id = $id;

        return $this;
    }

    public function getValidFrom(): ?\DateTimeInterface
    {
        return $this->validFrom;
    }

    public function setValidFrom(?\DateTimeInterface $validFrom): ProductPrice
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    public function getValidTo(): ?\DateTimeInterface
    {
        return $this->validTo;
    }

    public function setValidTo(?\DateTimeInterface $validTo): ProductPrice
    {
        $this->validTo = $validTo;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): ProductPrice
    {
        $this->price = $price;

        return $this;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setVersion(int $version): ProductPrice
    {
        $this->version = $version;

        return $this;
    }
}
