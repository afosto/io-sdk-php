<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsSubTransfer
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $transferId;
    /**
     * Location id.
     *
     * @var string
     */
    protected $from;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $stackId;
    /**
     * @var string
     */
    protected $routeId;
    /**
     * @var WmsSubTransferItem[]
     */
    protected $items;
    /**
     * @var \DateTime
     */
    protected $expectedAt;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransferId(): ?string
    {
        return $this->transferId;
    }

    /**
     * @param string|null $transferId
     *
     * @return self
     */
    public function setTransferId(?string $transferId): self
    {
        $this->transferId = $transferId;

        return $this;
    }

    /**
     * Location id.
     *
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Location id.
     *
     * @param string|null $from
     *
     * @return self
     */
    public function setFrom(?string $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStackId(): ?string
    {
        return $this->stackId;
    }

    /**
     * @param string|null $stackId
     *
     * @return self
     */
    public function setStackId(?string $stackId): self
    {
        $this->stackId = $stackId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRouteId(): ?string
    {
        return $this->routeId;
    }

    /**
     * @param string|null $routeId
     *
     * @return self
     */
    public function setRouteId(?string $routeId): self
    {
        $this->routeId = $routeId;

        return $this;
    }

    /**
     * @return WmsSubTransferItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param WmsSubTransferItem[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpectedAt(): ?\DateTime
    {
        return $this->expectedAt;
    }

    /**
     * @param \DateTime|null $expectedAt
     *
     * @return self
     */
    public function setExpectedAt(?\DateTime $expectedAt): self
    {
        $this->expectedAt = $expectedAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
