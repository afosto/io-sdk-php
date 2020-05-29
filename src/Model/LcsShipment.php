<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsShipment
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
    protected $methodId;
    /**
     * @var string
     */
    protected $contactId;
    /**
     * @var LcsShipmentAddressing
     */
    protected $addressing;
    /**
     * @var \DateTime
     */
    protected $expectedAt;
    /**
     * @var string
     */
    protected $stackId;
    /**
     * @var bool
     */
    protected $isOutbound;
    /**
     * False in case listed items does not match packaged items.
     *
     * @var bool
     */
    protected $isComplete;
    /**
     * True in case no further actions are required for this shipment.
     *
     * @var bool
     */
    protected $isDone;
    /**
     * True whe shipment is placed on handling list.
     *
     * @var bool
     */
    protected $isListed;
    /**
     * True in case shipment was picked (outbound) or sorted (inbound).
     *
     * @var bool
     */
    protected $isHandled;
    /**
     * If true, items are beeing shipped and have not yet arrived.
     *
     * @var bool
     */
    protected $isInTransit;
    /**
     * @var LcsShipmentItem[]
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
     * @var LcsParcel[]
     */
    protected $parcels;
    /**
     * @var string
     */
    protected $secret;
    /**
     * @var string
     */
    protected $listId;
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

    public function getAddressing(): ?LcsShipmentAddressing
    {
        return $this->addressing;
    }

    public function setAddressing(?LcsShipmentAddressing $addressing): self
    {
        $this->addressing = $addressing;

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

    public function getStackId(): ?string
    {
        return $this->stackId;
    }

    public function setStackId(?string $stackId): self
    {
        $this->stackId = $stackId;

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
     * False in case listed items does not match packaged items.
     */
    public function getIsComplete(): ?bool
    {
        return $this->isComplete;
    }

    /**
     * False in case listed items does not match packaged items.
     */
    public function setIsComplete(?bool $isComplete): self
    {
        $this->isComplete = $isComplete;

        return $this;
    }

    /**
     * True in case no further actions are required for this shipment.
     */
    public function getIsDone(): ?bool
    {
        return $this->isDone;
    }

    /**
     * True in case no further actions are required for this shipment.
     */
    public function setIsDone(?bool $isDone): self
    {
        $this->isDone = $isDone;

        return $this;
    }

    /**
     * True whe shipment is placed on handling list.
     */
    public function getIsListed(): ?bool
    {
        return $this->isListed;
    }

    /**
     * True whe shipment is placed on handling list.
     */
    public function setIsListed(?bool $isListed): self
    {
        $this->isListed = $isListed;

        return $this;
    }

    /**
     * True in case shipment was picked (outbound) or sorted (inbound).
     */
    public function getIsHandled(): ?bool
    {
        return $this->isHandled;
    }

    /**
     * True in case shipment was picked (outbound) or sorted (inbound).
     */
    public function setIsHandled(?bool $isHandled): self
    {
        $this->isHandled = $isHandled;

        return $this;
    }

    /**
     * If true, items are beeing shipped and have not yet arrived.
     */
    public function getIsInTransit(): ?bool
    {
        return $this->isInTransit;
    }

    /**
     * If true, items are beeing shipped and have not yet arrived.
     */
    public function setIsInTransit(?bool $isInTransit): self
    {
        $this->isInTransit = $isInTransit;

        return $this;
    }

    /**
     * @return LcsShipmentItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param LcsShipmentItem[]|null $items
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

    /**
     * @return LcsParcel[]|null
     */
    public function getParcels(): ?array
    {
        return $this->parcels;
    }

    /**
     * @param LcsParcel[]|null $parcels
     */
    public function setParcels(?array $parcels): self
    {
        $this->parcels = $parcels;

        return $this;
    }

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    public function getListId(): ?string
    {
        return $this->listId;
    }

    public function setListId(?string $listId): self
    {
        $this->listId = $listId;

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
