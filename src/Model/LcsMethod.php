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
    protected $carrierCode;
    /**
     * @var string
     */
    protected $methodCode;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $deliveryDuring;
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
     * @return string|null
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    /**
     * @param string|null $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(?string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMethodCode(): ?string
    {
        return $this->methodCode;
    }

    /**
     * @param string|null $methodCode
     *
     * @return self
     */
    public function setMethodCode(?string $methodCode): self
    {
        $this->methodCode = $methodCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryDuring(): ?string
    {
        return $this->deliveryDuring;
    }

    /**
     * @param string|null $deliveryDuring
     *
     * @return self
     */
    public function setDeliveryDuring(?string $deliveryDuring): self
    {
        $this->deliveryDuring = $deliveryDuring;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsSameDay(): ?bool
    {
        return $this->isSameDay;
    }

    /**
     * @param bool|null $isSameDay
     *
     * @return self
     */
    public function setIsSameDay(?bool $isSameDay): self
    {
        $this->isSameDay = $isSameDay;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsSunday(): ?bool
    {
        return $this->isSunday;
    }

    /**
     * @param bool|null $isSunday
     *
     * @return self
     */
    public function setIsSunday(?bool $isSunday): self
    {
        $this->isSunday = $isSunday;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsCarrierLocation(): ?bool
    {
        return $this->isCarrierLocation;
    }

    /**
     * @param bool|null $isCarrierLocation
     *
     * @return self
     */
    public function setIsCarrierLocation(?bool $isCarrierLocation): self
    {
        $this->isCarrierLocation = $isCarrierLocation;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsNeighbourAllowed(): ?bool
    {
        return $this->isNeighbourAllowed;
    }

    /**
     * @param bool|null $isNeighbourAllowed
     *
     * @return self
     */
    public function setIsNeighbourAllowed(?bool $isNeighbourAllowed): self
    {
        $this->isNeighbourAllowed = $isNeighbourAllowed;

        return $this;
    }
}
