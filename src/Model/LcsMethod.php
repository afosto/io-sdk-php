<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsMethod
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $carrierCode;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $maxWeight;
    /**
     * @var LcsCountry[]
     */
    protected $countries;
    /**
     * @var string
     */
    protected $deliveryDuring;
    /**
     * @var bool
     */
    protected $isConfigured = false;
    /**
     * @var bool
     */
    protected $isSameDay;
    /**
     * @var bool
     */
    protected $isSunday;
    /**
     * @var bool
     */
    protected $isCarrierLocation;
    /**
     * @var bool
     */
    protected $isNeighbourAllowed;
    /**
     * @var string
     */
    protected $providerMethodId;
    /**
     * @var string
     */
    protected $provider;
    /**
     * @var bool
     */
    protected $isEnabled = false;
    /**
     * @var int
     */
    protected $priority = 100;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    public function setCarrierCode(?string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

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

    public function getMaxWeight(): ?int
    {
        return $this->maxWeight;
    }

    public function setMaxWeight(?int $maxWeight): self
    {
        $this->maxWeight = $maxWeight;

        return $this;
    }

    /**
     * @return LcsCountry[]|null
     */
    public function getCountries(): ?array
    {
        return $this->countries;
    }

    /**
     * @param LcsCountry[]|null $countries
     */
    public function setCountries(?array $countries): self
    {
        $this->countries = $countries;

        return $this;
    }

    public function getDeliveryDuring(): ?string
    {
        return $this->deliveryDuring;
    }

    public function setDeliveryDuring(?string $deliveryDuring): self
    {
        $this->deliveryDuring = $deliveryDuring;

        return $this;
    }

    public function getIsConfigured(): ?bool
    {
        return $this->isConfigured;
    }

    public function setIsConfigured(?bool $isConfigured): self
    {
        $this->isConfigured = $isConfigured;

        return $this;
    }

    public function getIsSameDay(): ?bool
    {
        return $this->isSameDay;
    }

    public function setIsSameDay(?bool $isSameDay): self
    {
        $this->isSameDay = $isSameDay;

        return $this;
    }

    public function getIsSunday(): ?bool
    {
        return $this->isSunday;
    }

    public function setIsSunday(?bool $isSunday): self
    {
        $this->isSunday = $isSunday;

        return $this;
    }

    public function getIsCarrierLocation(): ?bool
    {
        return $this->isCarrierLocation;
    }

    public function setIsCarrierLocation(?bool $isCarrierLocation): self
    {
        $this->isCarrierLocation = $isCarrierLocation;

        return $this;
    }

    public function getIsNeighbourAllowed(): ?bool
    {
        return $this->isNeighbourAllowed;
    }

    public function setIsNeighbourAllowed(?bool $isNeighbourAllowed): self
    {
        $this->isNeighbourAllowed = $isNeighbourAllowed;

        return $this;
    }

    public function getProviderMethodId(): ?string
    {
        return $this->providerMethodId;
    }

    public function setProviderMethodId(?string $providerMethodId): self
    {
        $this->providerMethodId = $providerMethodId;

        return $this;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function setProvider(?string $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}
