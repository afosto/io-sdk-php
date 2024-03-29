<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrSessionProjectionItem
{
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var bool
     */
    protected $isDiscounted;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var int
     */
    protected $subtotal;
    /**
     * @var OdrSessionCalculationAdjustment[]
     */
    protected $adjustments;
    /**
     * @var int
     */
    protected $vatPercentage;
    /**
     * @var int
     */
    protected $total;
    /**
     * @var int
     */
    protected $totalRevenue;
    /**
     * @var OdrSessionCalculationStackItem[]
     */
    protected $orderItems;

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getIsDiscounted(): ?bool
    {
        return $this->isDiscounted;
    }

    public function setIsDiscounted(?bool $isDiscounted): self
    {
        $this->isDiscounted = $isDiscounted;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getSubtotal(): ?int
    {
        return $this->subtotal;
    }

    public function setSubtotal(?int $subtotal): self
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * @return OdrSessionCalculationAdjustment[]|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }

    /**
     * @param OdrSessionCalculationAdjustment[]|null $adjustments
     */
    public function setAdjustments(?array $adjustments): self
    {
        $this->adjustments = $adjustments;

        return $this;
    }

    public function getVatPercentage(): ?int
    {
        return $this->vatPercentage;
    }

    public function setVatPercentage(?int $vatPercentage): self
    {
        $this->vatPercentage = $vatPercentage;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getTotalRevenue(): ?int
    {
        return $this->totalRevenue;
    }

    public function setTotalRevenue(?int $totalRevenue): self
    {
        $this->totalRevenue = $totalRevenue;

        return $this;
    }

    /**
     * @return OdrSessionCalculationStackItem[]|null
     */
    public function getOrderItems(): ?array
    {
        return $this->orderItems;
    }

    /**
     * @param OdrSessionCalculationStackItem[]|null $orderItems
     */
    public function setOrderItems(?array $orderItems): self
    {
        $this->orderItems = $orderItems;

        return $this;
    }
}
