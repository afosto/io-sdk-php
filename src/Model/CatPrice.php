<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CatPrice
{
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var int
     */
    protected $originalAmount;
    /**
     * @var CatVat[]
     */
    protected $vat;
    /**
     * @var \DateTime
     */
    protected $activeAt;
    /**
     * @var \DateTime
     */
    protected $createdAt;

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getOriginalAmount(): ?int
    {
        return $this->originalAmount;
    }

    public function setOriginalAmount(?int $originalAmount): self
    {
        $this->originalAmount = $originalAmount;

        return $this;
    }

    /**
     * @return CatVat[]|null
     */
    public function getVat(): ?array
    {
        return $this->vat;
    }

    /**
     * @param CatVat[]|null $vat
     */
    public function setVat(?array $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    public function getActiveAt(): ?\DateTime
    {
        return $this->activeAt;
    }

    public function setActiveAt(?\DateTime $activeAt): self
    {
        $this->activeAt = $activeAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
