<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrSessionCalculation
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var OdrSessionProjectionItem[]
     */
    protected $items;
    /**
     * @var OdrSessionCalculationServiceItem[]
     */
    protected $services;
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
    protected $total;
    /**
     * @var OdrVatResult[]
     */
    protected $vat;
    /**
     * @var OdrSessionCalculationSettings
     */
    protected $settings;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var OdrContact
     */
    protected $customer;
    /**
     * @var OdrContact
     */
    protected $vendor;
    /**
     * @var bool
     */
    protected $isIncludingVat;
    /**
     * @var bool
     */
    protected $isVatShifted;
    /**
     * @var bool
     */
    protected $isPrepaid;
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var string
     */
    protected $channelId;
    /**
     * @var string
     */
    protected $fileId;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var \DateTime
     */
    protected $pricingAt;
    /**
     * @var \DateTime
     */
    protected $invoicedAt;
    /**
     * @var \DateTime
     */
    protected $prepaidAt;
    /**
     * @var string[]
     */
    protected $orderIds;
    /**
     * @var string[]
     */
    protected $coupons;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return OdrSessionProjectionItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param OdrSessionProjectionItem[]|null $items
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return OdrSessionCalculationServiceItem[]|null
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * @param OdrSessionCalculationServiceItem[]|null $services
     */
    public function setServices(?array $services): self
    {
        $this->services = $services;

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

    public function getSettings(): ?OdrSessionCalculationSettings
    {
        return $this->settings;
    }

    public function setSettings(?OdrSessionCalculationSettings $settings): self
    {
        $this->settings = $settings;

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

    public function getCustomer(): ?OdrContact
    {
        return $this->customer;
    }

    public function setCustomer(?OdrContact $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getVendor(): ?OdrContact
    {
        return $this->vendor;
    }

    public function setVendor(?OdrContact $vendor): self
    {
        $this->vendor = $vendor;

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

    public function getIsVatShifted(): ?bool
    {
        return $this->isVatShifted;
    }

    public function setIsVatShifted(?bool $isVatShifted): self
    {
        $this->isVatShifted = $isVatShifted;

        return $this;
    }

    public function getIsPrepaid(): ?bool
    {
        return $this->isPrepaid;
    }

    public function setIsPrepaid(?bool $isPrepaid): self
    {
        $this->isPrepaid = $isPrepaid;

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

    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;

        return $this;
    }

    public function getFileId(): ?string
    {
        return $this->fileId;
    }

    public function setFileId(?string $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

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

    public function getInvoicedAt(): ?\DateTime
    {
        return $this->invoicedAt;
    }

    public function setInvoicedAt(?\DateTime $invoicedAt): self
    {
        $this->invoicedAt = $invoicedAt;

        return $this;
    }

    public function getPrepaidAt(): ?\DateTime
    {
        return $this->prepaidAt;
    }

    public function setPrepaidAt(?\DateTime $prepaidAt): self
    {
        $this->prepaidAt = $prepaidAt;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getOrderIds(): ?array
    {
        return $this->orderIds;
    }

    /**
     * @param string[]|null $orderIds
     */
    public function setOrderIds(?array $orderIds): self
    {
        $this->orderIds = $orderIds;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getCoupons(): ?array
    {
        return $this->coupons;
    }

    /**
     * @param string[]|null $coupons
     */
    public function setCoupons(?array $coupons): self
    {
        $this->coupons = $coupons;

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

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
