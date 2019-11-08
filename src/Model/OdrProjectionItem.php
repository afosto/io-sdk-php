<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrProjectionItem
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
    protected $type;
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var int
     */
    protected $revenueAmount;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var int
     */
    protected $subtotal;
    /**
     * @var OdrAdjustmentResponse[]
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
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     *
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRevenueAmount(): ?int
    {
        return $this->revenueAmount;
    }

    /**
     * @param int|null $revenueAmount
     *
     * @return self
     */
    public function setRevenueAmount(?int $revenueAmount): self
    {
        $this->revenueAmount = $revenueAmount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSubtotal(): ?int
    {
        return $this->subtotal;
    }

    /**
     * @param int|null $subtotal
     *
     * @return self
     */
    public function setSubtotal(?int $subtotal): self
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * @return OdrAdjustmentResponse[]|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }

    /**
     * @param OdrAdjustmentResponse[]|null $adjustments
     *
     * @return self
     */
    public function setAdjustments(?array $adjustments): self
    {
        $this->adjustments = $adjustments;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getVatPercentage(): ?int
    {
        return $this->vatPercentage;
    }

    /**
     * @param int|null $vatPercentage
     *
     * @return self
     */
    public function setVatPercentage(?int $vatPercentage): self
    {
        $this->vatPercentage = $vatPercentage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }
}