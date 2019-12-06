<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrCalculationListItem
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var int
     */
    protected $count;
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
     * @var OdrContact
     */
    protected $customer;
    /**
     * @var OdrContact
     */
    protected $vendor;
    /**
     * @var string
     */
    protected $currency;
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
    protected $isAuthorized;
    /**
     * @var bool
     */
    protected $isInvoiced;
    /**
     * @var string
     */
    protected $clientId;
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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

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

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

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

    public function getIsVatShifted(): ?bool
    {
        return $this->isVatShifted;
    }

    public function setIsVatShifted(?bool $isVatShifted): self
    {
        $this->isVatShifted = $isVatShifted;

        return $this;
    }

    public function getIsAuthorized(): ?bool
    {
        return $this->isAuthorized;
    }

    public function setIsAuthorized(?bool $isAuthorized): self
    {
        $this->isAuthorized = $isAuthorized;

        return $this;
    }

    public function getIsInvoiced(): ?bool
    {
        return $this->isInvoiced;
    }

    public function setIsInvoiced(?bool $isInvoiced): self
    {
        $this->isInvoiced = $isInvoiced;

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
