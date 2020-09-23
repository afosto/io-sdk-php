<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsSubTransferItem
{
    /**
     * @var string
     */
    protected $transferItemId;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $claimItemId;
    /**
     * @var string
     */
    protected $inventoryItemId;
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
    protected $locationId;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    public function getTransferItemId(): ?string
    {
        return $this->transferItemId;
    }

    public function setTransferItemId(?string $transferItemId): self
    {
        $this->transferItemId = $transferItemId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

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

    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }

    public function setInventoryItemId(?string $inventoryItemId): self
    {
        $this->inventoryItemId = $inventoryItemId;

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

    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    public function setLocationId(?string $locationId): self
    {
        $this->locationId = $locationId;

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
