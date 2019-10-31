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
    protected $id;
    /**
     * @var string
     */
    protected $claimItemId;
    /**
     * @var string
     */
    protected $warehouseItemId;
    /**
     * @var string
     */
    protected $stackItemId;
    /**
     * @var string
     */
    protected $status;
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
    public function getClaimItemId(): ?string
    {
        return $this->claimItemId;
    }

    /**
     * @param string|null $claimItemId
     *
     * @return self
     */
    public function setClaimItemId(?string $claimItemId): self
    {
        $this->claimItemId = $claimItemId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWarehouseItemId(): ?string
    {
        return $this->warehouseItemId;
    }

    /**
     * @param string|null $warehouseItemId
     *
     * @return self
     */
    public function setWarehouseItemId(?string $warehouseItemId): self
    {
        $this->warehouseItemId = $warehouseItemId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStackItemId(): ?string
    {
        return $this->stackItemId;
    }

    /**
     * @param string|null $stackItemId
     *
     * @return self
     */
    public function setStackItemId(?string $stackItemId): self
    {
        $this->stackItemId = $stackItemId;

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
