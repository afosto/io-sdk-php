<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsCreateLocationRequest
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name = '';
    /**
     * @var string
     */
    protected $countryIso;
    /**
     * @var bool
     */
    protected $isSupplier;
    /**
     * @var bool
     */
    protected $isManaged;
    /**
     * @var bool
     */
    protected $isCustomer;
    /**
     * @var bool
     */
    protected $isTrackingInventory;
    /**
     * @var string
     */
    protected $addressId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCountryIso(): ?string
    {
        return $this->countryIso;
    }

    public function setCountryIso(?string $countryIso): self
    {
        $this->countryIso = $countryIso;

        return $this;
    }

    public function getIsSupplier(): ?bool
    {
        return $this->isSupplier;
    }

    public function setIsSupplier(?bool $isSupplier): self
    {
        $this->isSupplier = $isSupplier;

        return $this;
    }

    public function getIsManaged(): ?bool
    {
        return $this->isManaged;
    }

    public function setIsManaged(?bool $isManaged): self
    {
        $this->isManaged = $isManaged;

        return $this;
    }

    public function getIsCustomer(): ?bool
    {
        return $this->isCustomer;
    }

    public function setIsCustomer(?bool $isCustomer): self
    {
        $this->isCustomer = $isCustomer;

        return $this;
    }

    public function getIsTrackingInventory(): ?bool
    {
        return $this->isTrackingInventory;
    }

    public function setIsTrackingInventory(?bool $isTrackingInventory): self
    {
        $this->isTrackingInventory = $isTrackingInventory;

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
}
