<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsShipmentItemModel
{
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var string
     */
    protected $position;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $hsCode;
    /**
     * @var LcsServiceOption[]
     */
    protected $service;
    /**
     * @var LcsShipmentItemModelReferences[]
     */
    protected $references;

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

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

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

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

    /**
     * @return LcsShipmentItemModelReferences[]|null
     */
    public function getReferences(): ?array
    {
        return $this->references;
    }

    /**
     * @param LcsShipmentItemModelReferences[]|null $references
     */
    public function setReferences(?array $references): self
    {
        $this->references = $references;

        return $this;
    }
}
