<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntWatcher
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $storageId;
    /**
     * @var CntWatcherSource
     */
    protected $source;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    public function getStorageId(): ?int
    {
        return $this->storageId;
    }

    public function setStorageId(?int $storageId): self
    {
        $this->storageId = $storageId;

        return $this;
    }

    public function getSource(): ?CntWatcherSource
    {
        return $this->source;
    }

    public function setSource(?CntWatcherSource $source): self
    {
        $this->source = $source;

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
