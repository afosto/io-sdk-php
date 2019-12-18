<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsListedShipment
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
     * @var LcsListedShipmentAddressing
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
    protected $isEditable;
    /**
     * @var bool
     */
    protected $isOutbound;
    /**
     * @var bool
     */
    protected $isListed;
    /**
     * @var bool
     */
    protected $isFinished;
    /**
     * @var bool
     */
    protected $isInTransit;
    /**
     * @var bool
     */
    protected $isDelivered;
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

    public function getAddressing(): ?LcsListedShipmentAddressing
    {
        return $this->addressing;
    }

    public function setAddressing(?LcsListedShipmentAddressing $addressing): self
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

    public function getIsListed(): ?bool
    {
        return $this->isListed;
    }

    public function setIsListed(?bool $isListed): self
    {
        $this->isListed = $isListed;

        return $this;
    }

    public function getIsFinished(): ?bool
    {
        return $this->isFinished;
    }

    public function setIsFinished(?bool $isFinished): self
    {
        $this->isFinished = $isFinished;

        return $this;
    }

    public function getIsInTransit(): ?bool
    {
        return $this->isInTransit;
    }

    public function setIsInTransit(?bool $isInTransit): self
    {
        $this->isInTransit = $isInTransit;

        return $this;
    }

    public function getIsDelivered(): ?bool
    {
        return $this->isDelivered;
    }

    public function setIsDelivered(?bool $isDelivered): self
    {
        $this->isDelivered = $isDelivered;

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
