<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrTransfer
{
    /**
     * @var string
     */
    protected $id;
    /**
     * Target location.
     *
     * @var string
     */
    protected $to;
    /**
     * @var string
     */
    protected $status;
    /**
     * Optional: used when order should be packed in a single box for the target.
     *
     * @var OdrTransferRoute[]
     */
    protected $collections;
    /**
     * @var OdrTransferRoute[]
     */
    protected $deliveries;
    /**
     * @var bool
     */
    protected $isCollectionPending;
    /**
     * @var string
     */
    protected $stackReference;
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
     * Target location.
     *
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * Target location.
     *
     * @param string|null $to
     *
     * @return self
     */
    public function setTo(?string $to): self
    {
        $this->to = $to;

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
     * Optional: used when order should be packed in a single box for the target.
     *
     * @return OdrTransferRoute[]|null
     */
    public function getCollections(): ?array
    {
        return $this->collections;
    }

    /**
     * Optional: used when order should be packed in a single box for the target.
     *
     * @param OdrTransferRoute[]|null $collections
     *
     * @return self
     */
    public function setCollections(?array $collections): self
    {
        $this->collections = $collections;

        return $this;
    }

    /**
     * @return OdrTransferRoute[]|null
     */
    public function getDeliveries(): ?array
    {
        return $this->deliveries;
    }

    /**
     * @param OdrTransferRoute[]|null $deliveries
     *
     * @return self
     */
    public function setDeliveries(?array $deliveries): self
    {
        $this->deliveries = $deliveries;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsCollectionPending(): ?bool
    {
        return $this->isCollectionPending;
    }

    /**
     * @param bool|null $isCollectionPending
     *
     * @return self
     */
    public function setIsCollectionPending(?bool $isCollectionPending): self
    {
        $this->isCollectionPending = $isCollectionPending;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStackReference(): ?string
    {
        return $this->stackReference;
    }

    /**
     * @param string|null $stackReference
     *
     * @return self
     */
    public function setStackReference(?string $stackReference): self
    {
        $this->stackReference = $stackReference;

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