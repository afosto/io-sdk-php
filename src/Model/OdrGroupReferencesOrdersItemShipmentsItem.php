<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrGroupReferencesOrdersItemShipmentsItem
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $isInbound;
    /**
     * @var bool
     */
    protected $isMissing;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

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

    public function getIsMissing(): ?bool
    {
        return $this->isMissing;
    }

    public function setIsMissing(?bool $isMissing): self
    {
        $this->isMissing = $isMissing;

        return $this;
    }
}
