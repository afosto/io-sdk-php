<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsUpdateInventoryItemRequest
{
    /**
     * refers to the position within the warehouse.
     *
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
     * additional metadata that applies to the item.
     *
     * @var string[]
     */
    protected $metadata;

    /**
     * refers to the position within the warehouse.
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * refers to the position within the warehouse.
     */
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

    /**
     * additional metadata that applies to the item.
     *
     * @return string[]|null
     */
    public function getMetadata(): ?\ArrayObject
    {
        return $this->metadata;
    }

    /**
     * additional metadata that applies to the item.
     *
     * @param string[]|null $metadata
     */
    public function setMetadata(?\ArrayObject $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }
}
