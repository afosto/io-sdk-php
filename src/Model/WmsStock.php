<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsStock
{
    /**
     * @var string
     */
    protected $locationId;
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
    protected $lotNumber;
    /**
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * @var int
     */
    protected $available;
    /**
     * @var int
     */
    protected $reserved;
    /**
     * @var int
     */
    protected $claimed;
    /**
     * @var int
     */
    protected $transit;
    /**
     * @var int
     */
    protected $missing;
    /**
     * @var int
     */
    protected $backordered;
    /**
     * @var int
     */
    protected $total;

    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    public function setLocationId(?string $locationId): self
    {
        $this->locationId = $locationId;

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

    public function getLotNumber(): ?string
    {
        return $this->lotNumber;
    }

    public function setLotNumber(?string $lotNumber): self
    {
        $this->lotNumber = $lotNumber;

        return $this;
    }

    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(?\DateTime $expiresAt): self
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    public function getAvailable(): ?int
    {
        return $this->available;
    }

    public function setAvailable(?int $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function getReserved(): ?int
    {
        return $this->reserved;
    }

    public function setReserved(?int $reserved): self
    {
        $this->reserved = $reserved;

        return $this;
    }

    public function getClaimed(): ?int
    {
        return $this->claimed;
    }

    public function setClaimed(?int $claimed): self
    {
        $this->claimed = $claimed;

        return $this;
    }

    public function getTransit(): ?int
    {
        return $this->transit;
    }

    public function setTransit(?int $transit): self
    {
        $this->transit = $transit;

        return $this;
    }

    public function getMissing(): ?int
    {
        return $this->missing;
    }

    public function setMissing(?int $missing): self
    {
        $this->missing = $missing;

        return $this;
    }

    public function getBackordered(): ?int
    {
        return $this->backordered;
    }

    public function setBackordered(?int $backordered): self
    {
        $this->backordered = $backordered;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }
}
