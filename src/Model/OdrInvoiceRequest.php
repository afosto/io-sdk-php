<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrInvoiceRequest
{
    /**
     * @var OdrStackReference
     */
    protected $stack;
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var OdrInvoiceItemModel[]
     */
    protected $items;
    /**
     * @var OdrAdjustment[]
     */
    protected $adjustments;
    /**
     * @var string
     */
    protected $contactId;
    /**
     * @var string
     */
    protected $organisationId;
    /**
     * @var string
     */
    protected $addressId;
    /**
     * @var string
     */
    protected $shipmentAddressId;
    /**
     * @var \DateTime
     */
    protected $pricingAt;
    /**
     * @var string[]
     */
    protected $coupons;
    /**
     * @var mixed
     */
    protected $metadata;

    /**
     * @return OdrStackReference|null
     */
    public function getStack(): ?OdrStackReference
    {
        return $this->stack;
    }

    /**
     * @param OdrStackReference|null $stack
     *
     * @return self
     */
    public function setStack(?OdrStackReference $stack): self
    {
        $this->stack = $stack;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     *
     * @return self
     */
    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return OdrInvoiceItemModel[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param OdrInvoiceItemModel[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return OdrAdjustment[]|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }

    /**
     * @param OdrAdjustment[]|null $adjustments
     *
     * @return self
     */
    public function setAdjustments(?array $adjustments): self
    {
        $this->adjustments = $adjustments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * @param string|null $contactId
     *
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrganisationId(): ?string
    {
        return $this->organisationId;
    }

    /**
     * @param string|null $organisationId
     *
     * @return self
     */
    public function setOrganisationId(?string $organisationId): self
    {
        $this->organisationId = $organisationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressId(): ?string
    {
        return $this->addressId;
    }

    /**
     * @param string|null $addressId
     *
     * @return self
     */
    public function setAddressId(?string $addressId): self
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShipmentAddressId(): ?string
    {
        return $this->shipmentAddressId;
    }

    /**
     * @param string|null $shipmentAddressId
     *
     * @return self
     */
    public function setShipmentAddressId(?string $shipmentAddressId): self
    {
        $this->shipmentAddressId = $shipmentAddressId;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getPricingAt(): ?\DateTime
    {
        return $this->pricingAt;
    }

    /**
     * @param \DateTime|null $pricingAt
     *
     * @return self
     */
    public function setPricingAt(?\DateTime $pricingAt): self
    {
        $this->pricingAt = $pricingAt;

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
     *
     * @return self
     */
    public function setCoupons(?array $coupons): self
    {
        $this->coupons = $coupons;

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
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }
}
