<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrSessionCalculationServiceItem
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var bool
     */
    protected $isPercentage;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var int
     */
    protected $subtotal;
    /**
     * @var OdrSessionCalculationServiceAdjustment[]
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

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getIsPercentage(): ?bool
    {
        return $this->isPercentage;
    }

    public function setIsPercentage(?bool $isPercentage): self
    {
        $this->isPercentage = $isPercentage;

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
     * @return OdrSessionCalculationServiceAdjustment[]|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }

    /**
     * @param OdrSessionCalculationServiceAdjustment[]|null $adjustments
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
}
