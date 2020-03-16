<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrProjection
{
    /**
     * @var OdrProjectionItem[]
     */
    protected $items;
    /**
     * @var int
     */
    protected $subtotal;
    /**
     * @var OdrCalculationAdjustment[]
     */
    protected $adjustments;
    /**
     * @var int
     */
    protected $total;
    /**
     * @var OdrVatResult[]
     */
    protected $vat;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var bool
     */
    protected $isIncludingVat;
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var \DateTime
     */
    protected $pricingAt;

    /**
     * @return OdrProjectionItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param OdrProjectionItem[]|null $items
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

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
     * @return OdrCalculationAdjustment[]|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }

    /**
     * @param OdrCalculationAdjustment[]|null $adjustments
     */
    public function setAdjustments(?array $adjustments): self
    {
        $this->adjustments = $adjustments;

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

    /**
     * @return OdrVatResult[]|null
     */
    public function getVat(): ?array
    {
        return $this->vat;
    }

    /**
     * @param OdrVatResult[]|null $vat
     */
    public function setVat(?array $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getIsIncludingVat(): ?bool
    {
        return $this->isIncludingVat;
    }

    public function setIsIncludingVat(?bool $isIncludingVat): self
    {
        $this->isIncludingVat = $isIncludingVat;

        return $this;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getPricingAt(): ?\DateTime
    {
        return $this->pricingAt;
    }

    public function setPricingAt(?\DateTime $pricingAt): self
    {
        $this->pricingAt = $pricingAt;

        return $this;
    }
}
