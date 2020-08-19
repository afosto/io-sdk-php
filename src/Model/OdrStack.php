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
     * @var OdrStackReference
     */
    protected $reference;
    /**
     * @var OdrStackState
     */
    protected $state;
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

    public function getReference(): ?OdrStackReference
    {
        return $this->reference;
    }

    public function setReference(?OdrStackReference $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getState(): ?OdrStackState
    {
        return $this->state;
    }

    public function setState(?OdrStackState $state): self
    {
        $this->state = $state;

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
