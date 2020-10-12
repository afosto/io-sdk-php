<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsShipmentModel
{
    /**
     * @var LcsShipmentModelAddressing
     */
    protected $addressing;
    /**
     * @var bool
     */
    protected $isOutbound;
    /**
     * @var LcsShipmentItemModel[]
     */
    protected $items;
    /**
     * @var LcsShipmentItemCorrection[]
     */
    protected $backorders;
    /**
     * @var LcsShipmentItemCorrection[]
     */
    protected $overage;
    /**
     * @var \DateTime
     */
    protected $expectedAt;
    /**
     * @var \DateTime
     */
    protected $shipAt;
    /**
     * @var string
     */
    protected $methodId;
    /**
     * @var string
     */
    protected $contactId;
    /**
     * @var string
     */
    protected $orderId;
    /**
     * @var string[]
     */
    protected $priorShipments;

    public function getAddressing(): ?LcsShipmentModelAddressing
    {
        return $this->addressing;
    }

    public function setAddressing(?LcsShipmentModelAddressing $addressing): self
    {
        $this->addressing = $addressing;

        return $this;
    }

    public function getIsOutbound(): ?bool
    {
        return $this->isOutbound;
    }

    public function setIsOutbound(?bool $isOutbound): self
    {
        $this->isOutbound = $isOutbound;

        return $this;
    }

    /**
     * @return LcsShipmentItemModel[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param LcsShipmentItemModel[]|null $items
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return LcsShipmentItemCorrection[]|null
     */
    public function getBackorders(): ?array
    {
        return $this->backorders;
    }

    /**
     * @param LcsShipmentItemCorrection[]|null $backorders
     */
    public function setBackorders(?array $backorders): self
    {
        $this->backorders = $backorders;

        return $this;
    }

    /**
     * @return LcsShipmentItemCorrection[]|null
     */
    public function getOverage(): ?array
    {
        return $this->overage;
    }

    /**
     * @param LcsShipmentItemCorrection[]|null $overage
     */
    public function setOverage(?array $overage): self
    {
        $this->overage = $overage;

        return $this;
    }

    public function getExpectedAt(): ?\DateTime
    {
        return $this->expectedAt;
    }

    public function setExpectedAt(?\DateTime $expectedAt): self
    {
        $this->expectedAt = $expectedAt;

        return $this;
    }

    public function getShipAt(): ?\DateTime
    {
        return $this->shipAt;
    }

    public function setShipAt(?\DateTime $shipAt): self
    {
        $this->shipAt = $shipAt;

        return $this;
    }

    public function getMethodId(): ?string
    {
        return $this->methodId;
    }

    public function setMethodId(?string $methodId): self
    {
        $this->methodId = $methodId;

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

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPriorShipments(): ?array
    {
        return $this->priorShipments;
    }

    /**
     * @param string[]|null $priorShipments
     */
    public function setPriorShipments(?array $priorShipments): self
    {
        $this->priorShipments = $priorShipments;

        return $this;
    }
}
