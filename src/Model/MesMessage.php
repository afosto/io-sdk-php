<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class MesMessage
{
    /**
     * @var string
     */
    protected $content;
    /**
     * @var string
     */
    protected $participantReference;
    /**
     * @var bool
     */
    protected $isPrivate;
    /**
     * additional metadata that applies to the item.
     *
     * @var string[]
     */
    protected $metadata;
    /**
     * @var \DateTime
     */
    protected $createdAt;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getParticipantReference(): ?string
    {
        return $this->participantReference;
    }

    public function setParticipantReference(?string $participantReference): self
    {
        $this->participantReference = $participantReference;

        return $this;
    }

    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(?bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    /**
     * additional metadata that applies to the item.
     *
     * @return string[]|null
     */
    public function getMetadata(): ?\ArrayObject
    {
        return $this->metadata;
    }

    /**
     * additional metadata that applies to the item.
     *
     * @param string[]|null $metadata
     */
    public function setMetadata(?\ArrayObject $metadata): self
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
}
