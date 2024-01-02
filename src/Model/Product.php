<?php

namespace Boris\ProductServiceSdk\Model;

class Product
{
    private string $id;
    private \DateTimeImmutable $createdAt;
    private \DateTimeImmutable $updatedAt;
    private string $srName;
    private string $enName;
    private int $version;
    /**
     * @var ProductPrice[]
     */
    private array $prices = [];

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): Product
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): Product
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getSrName(): string
    {
        return $this->srName;
    }

    public function setSrName(string $srName): Product
    {
        $this->srName = $srName;

        return $this;
    }

    public function getEnName(): string
    {
        return $this->enName;
    }

    public function setEnName(string $enName): Product
    {
        $this->enName = $enName;

        return $this;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setVersion(int $version): Product
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return ProductPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    public function addPrice(ProductPrice $productPrice): void
    {
        $this->prices[] = $productPrice;
    }

    public function removePrice(ProductPrice $productPrice): void
    {
    }

    /**
     * @param ProductPrice[] $prices
     *
     * @return $this
     */
    public function setPrices(array $prices): Product
    {
        $this->prices = $prices;

        return $this;
    }
}
