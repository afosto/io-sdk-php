<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrInvoice
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
     * @var OdrInvoiceItem[]
     */
    protected $items;
    /**
     * @var int
     */
    protected $subtotal;
    /**
     * @var OdrInvoiceAdjustmentResponse[]
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
    protected $isPaid;
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
    protected $invoicedAt;
    /**
     * @var \DateTime
     */
    protected $paidAt;
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
     * @return OdrInvoiceItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param OdrInvoiceItem[]|null $items
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
     * @return OdrInvoiceAdjustmentResponse[]|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }

    /**
     * @param OdrInvoiceAdjustmentResponse[]|null $adjustments
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

    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    public function setIsPaid(?bool $isPaid): self
    {
        $this->isPaid = $isPaid;

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

    public function getInvoicedAt(): ?\DateTime
    {
        return $this->invoicedAt;
    }

    public function setInvoicedAt(?\DateTime $invoicedAt): self
    {
        $this->invoicedAt = $invoicedAt;

        return $this;
    }

    public function getPaidAt(): ?\DateTime
    {
        return $this->paidAt;
    }

    public function setPaidAt(?\DateTime $paidAt): self
    {
        $this->paidAt = $paidAt;

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
