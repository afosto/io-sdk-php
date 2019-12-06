<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrLog
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $stackType;
    /**
     * @var string
     */
    protected $stackId;
    /**
     * @var string
     */
    protected $event;
    /**
     * @var \DateTime
     */
    protected $createdAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getStackType(): ?string
    {
        return $this->stackType;
    }

    public function setStackType(?string $stackType): self
    {
        $this->stackType = $stackType;

        return $this;
    }

    public function getStackId(): ?string
    {
        return $this->stackId;
    }

    public function setStackId(?string $stackId): self
    {
        $this->stackId = $stackId;

        return $this;
    }

    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function setEvent(?string $event): self
    {
        $this->event = $event;

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
}
