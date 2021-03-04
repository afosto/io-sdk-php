<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntInstantProxy
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $tenantId;
    /**
     * @var CntListIndex[]
     */
    protected $indexes;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;

        return $this;
    }

    /**
     * @return CntListIndex[]|null
     */
    public function getIndexes(): ?array
    {
        return $this->indexes;
    }

    /**
     * @param CntListIndex[]|null $indexes
     */
    public function setIndexes(?array $indexes): self
    {
        $this->indexes = $indexes;

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