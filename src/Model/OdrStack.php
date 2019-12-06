<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrStack
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var bool
     */
    protected $isLocked;
    /**
     * @var bool
     */
    protected $isConfirmed;
    /**
     * @var bool
     */
    protected $isAccepted;
    /**
     * @var bool
     */
    protected $isInProgress;
    /**
     * @var bool
     */
    protected $isFinished;
    /**
     * @var string[]
     */
    protected $disposals;
    /**
     * @var OdrStackReference[]
     */
    protected $source;
    /**
     * @var \DateTime
     */
    protected $expectedAt;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }

    public function setIsLocked(?bool $isLocked): self
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    public function getIsConfirmed(): ?bool
    {
        return $this->isConfirmed;
    }

    public function setIsConfirmed(?bool $isConfirmed): self
    {
        $this->isConfirmed = $isConfirmed;

        return $this;
    }

    public function getIsAccepted(): ?bool
    {
        return $this->isAccepted;
    }

    public function setIsAccepted(?bool $isAccepted): self
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    public function getIsInProgress(): ?bool
    {
        return $this->isInProgress;
    }

    public function setIsInProgress(?bool $isInProgress): self
    {
        $this->isInProgress = $isInProgress;

        return $this;
    }

    public function getIsFinished(): ?bool
    {
        return $this->isFinished;
    }

    public function setIsFinished(?bool $isFinished): self
    {
        $this->isFinished = $isFinished;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getDisposals(): ?array
    {
        return $this->disposals;
    }

    /**
     * @param string[]|null $disposals
     */
    public function setDisposals(?array $disposals): self
    {
        $this->disposals = $disposals;

        return $this;
    }

    /**
     * @return OdrStackReference[]|null
     */
    public function getSource(): ?array
    {
        return $this->source;
    }

    /**
     * @param OdrStackReference[]|null $source
     */
    public function setSource(?array $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getExpectedAt(): ?\DateTime
    {
        return $this->expectedAt;
    }

    public function setExpectedAt(?\DateTime $expectedAt): self
    {
        $this->expectedAt = $expectedAt;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

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
