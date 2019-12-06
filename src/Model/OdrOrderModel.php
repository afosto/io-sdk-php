<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrOrderModel
{
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var string
     */
    protected $contactId;
    /**
     * @var string
     */
    protected $organisationId;
    /**
     * @var bool
     */
    protected $isConfirmed;
    /**
     * @var string
     */
    protected $stack;
    /**
     * @var string
     */
    protected $addressId;
    /**
     * @var string
     */
    protected $shipmentAddressId;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var \DateTime
     */
    protected $dueAt;

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;

        return $this;
    }

    public function getOrganisationId(): ?string
    {
        return $this->organisationId;
    }

    public function setOrganisationId(?string $organisationId): self
    {
        $this->organisationId = $organisationId;

        return $this;
    }

    public function getIsConfirmed(): ?bool
    {
        return $this->isConfirmed;
    }

    public function setIsConfirmed(?bool $isConfirmed): self
    {
        $this->isConfirmed = $isConfirmed;

        return $this;
    }

    public function getStack(): ?string
    {
        return $this->stack;
    }

    public function setStack(?string $stack): self
    {
        $this->stack = $stack;

        return $this;
    }

    public function getAddressId(): ?string
    {
        return $this->addressId;
    }

    public function setAddressId(?string $addressId): self
    {
        $this->addressId = $addressId;

        return $this;
    }

    public function getShipmentAddressId(): ?string
    {
        return $this->shipmentAddressId;
    }

    public function setShipmentAddressId(?string $shipmentAddressId): self
    {
        $this->shipmentAddressId = $shipmentAddressId;

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

    public function getDueAt(): ?\DateTime
    {
        return $this->dueAt;
    }

    public function setDueAt(?\DateTime $dueAt): self
    {
        $this->dueAt = $dueAt;

        return $this;
    }
}
