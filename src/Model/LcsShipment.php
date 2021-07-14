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
    protected $type;
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
    protected $channelId;
    /**
     * @var string
     */
    protected $orderId;
    /**
     * @var LcsListedShipmentAddressing
     */
    protected $addressing;
    /**
     * @var \DateTime
     */
    protected $shipAt;
    /**
     * @var \DateTime
     */
    protected $estimatedShipAt;
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
    protected $isEditable;
    /**
     * @var bool
     */
    protected $isOutbound;
    /**
     * @var bool
     */
    protected $isLabeled;
    /**
     * @var bool
     */
    protected $isServiced;
    /**
     * False in case listed items does not match packaged items.
     *
     * @var bool
     */
    protected $isComplete;
    /**
     * @var bool
     */
    protected $isOvercomplete;
    /**
     * @var bool
     */
    protected $isBoxed;
    /**
     * True in case shipment was picked (outbound) or sorted (inbound).
     *
     * @var bool
     */
    protected $isHandled;
    /**
     * True whe shipment is placed on handling list.
     *
     * @var bool
     */
    protected $isListed;
    /**
     * True in case no further actions are required for this shipment.
     *
     * @var bool
     */
    protected $isFinished;
    /**
     * If true, items are beeing shipped and have not yet arrived.
     *
     * @var bool
     */
    protected $isInTransit;
    /**
     * @var bool
     */
    protected $isCanceled;
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
     * @var string[]
     */
    protected $priorShipments;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;

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

    public function getAddressing(): ?LcsListedShipmentAddressing
    {
        return $this->addressing;
    }

    public function setAddressing(?LcsListedShipmentAddressing $addressing): self
    {
        $this->addressing = $addressing;

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

    public function getEstimatedShipAt(): ?\DateTime
    {
        return $this->estimatedShipAt;
    }

    public function setEstimatedShipAt(?\DateTime $estimatedShipAt): self
    {
        $this->estimatedShipAt = $estimatedShipAt;

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

    public function getIsEditable(): ?bool
    {
        return $this->isEditable;
    }

    public function setIsEditable(?bool $isEditable): self
    {
        $this->isEditable = $isEditable;

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

    public function getIsLabeled(): ?bool
    {
        return $this->isLabeled;
    }

    public function setIsLabeled(?bool $isLabeled): self
    {
        $this->isLabeled = $isLabeled;

        return $this;
    }

    public function getIsServiced(): ?bool
    {
        return $this->isServiced;
    }

    public function setIsServiced(?bool $isServiced): self
    {
        $this->isServiced = $isServiced;

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

    public function getIsOvercomplete(): ?bool
    {
        return $this->isOvercomplete;
    }

    public function setIsOvercomplete(?bool $isOvercomplete): self
    {
        $this->isOvercomplete = $isOvercomplete;

        return $this;
    }

    public function getIsBoxed(): ?bool
    {
        return $this->isBoxed;
    }

    public function setIsBoxed(?bool $isBoxed): self
    {
        $this->isBoxed = $isBoxed;

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
     * True in case no further actions are required for this shipment.
     */
    public function getIsFinished(): ?bool
    {
        return $this->isFinished;
    }

    /**
     * True in case no further actions are required for this shipment.
     */
    public function setIsFinished(?bool $isFinished): self
    {
        $this->isFinished = $isFinished;

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

    public function getIsCanceled(): ?bool
    {
        return $this->isCanceled;
    }

    public function setIsCanceled(?bool $isCanceled): self
    {
        $this->isCanceled = $isCanceled;

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
