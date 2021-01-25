<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsShipmentItem
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var string
     */
    protected $position;
    /**
     * @var string
     */
    protected $orderItemId;
    /**
     * @var string
     */
    protected $claimItemId;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $isListed;
    /**
     * @var bool
     */
    protected $isHandled;
    /**
     * @var bool
     */
    protected $isBoxed;
    /**
     * @var bool
     */
    protected $isInTransit;
    /**
     * @var bool
     */
    protected $isFinished;
    /**
     * @var bool
     */
    protected $isMissing;
    /**
     * @var string
     */
    protected $hsCode;
    /**
     * @var LcsServiceOption[]
     */
    protected $service;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

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

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }

    public function setOrderItemId(?string $orderItemId): self
    {
        $this->orderItemId = $orderItemId;

        return $this;
    }

    public function getClaimItemId(): ?string
    {
        return $this->claimItemId;
    }

    public function setClaimItemId(?string $claimItemId): self
    {
        $this->claimItemId = $claimItemId;

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

    public function getIsListed(): ?bool
    {
        return $this->isListed;
    }

    public function setIsListed(?bool $isListed): self
    {
        $this->isListed = $isListed;

        return $this;
    }

    public function getIsHandled(): ?bool
    {
        return $this->isHandled;
    }

    public function setIsHandled(?bool $isHandled): self
    {
        $this->isHandled = $isHandled;

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

    public function getIsInTransit(): ?bool
    {
        return $this->isInTransit;
    }

    public function setIsInTransit(?bool $isInTransit): self
    {
        $this->isInTransit = $isInTransit;

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

    public function getIsMissing(): ?bool
    {
        return $this->isMissing;
    }

    public function setIsMissing(?bool $isMissing): self
    {
        $this->isMissing = $isMissing;

        return $this;
    }

    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }

    public function setHsCode(?string $hsCode): self
    {
        $this->hsCode = $hsCode;

        return $this;
    }

    /**
     * @return LcsServiceOption[]|null
     */
    public function getService(): ?array
    {
        return $this->service;
    }

    /**
     * @param LcsServiceOption[]|null $service
     */
    public function setService(?array $service): self
    {
        $this->service = $service;

        return $this;
    }
}
