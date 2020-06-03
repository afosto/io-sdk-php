<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrGroup
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
    protected $description;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var bool
     */
    protected $isInbound = false;
    /**
     * @var bool
     */
    protected $isBackorder = false;
    /**
     * @var string
     */
    protected $orderId;
    /**
     * @var string[]
     */
    protected $ids;
    /**
     * @var OdrGroupReferences
     */
    protected $references;
    /**
     * @var OdrFilter[]
     */
    protected $filters;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getIsInbound(): ?bool
    {
        return $this->isInbound;
    }

    public function setIsInbound(?bool $isInbound): self
    {
        $this->isInbound = $isInbound;

        return $this;
    }

    public function getIsBackorder(): ?bool
    {
        return $this->isBackorder;
    }

    public function setIsBackorder(?bool $isBackorder): self
    {
        $this->isBackorder = $isBackorder;

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
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * @param string[]|null $ids
     */
    public function setIds(?array $ids): self
    {
        $this->ids = $ids;

        return $this;
    }

    public function getReferences(): ?OdrGroupReferences
    {
        return $this->references;
    }

    public function setReferences(?OdrGroupReferences $references): self
    {
        $this->references = $references;

        return $this;
    }

    /**
     * @return OdrFilter[]|null
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /**
     * @param OdrFilter[]|null $filters
     */
    public function setFilters(?array $filters): self
    {
        $this->filters = $filters;

        return $this;
    }
}
