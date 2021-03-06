<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class IamTier
{
    /**
     * @var int
     */
    protected $upTo;
    /**
     * @var int
     */
    protected $flatAmount;
    /**
     * @var int
     */
    protected $unitAmount;

    public function getUpTo(): ?int
    {
        return $this->upTo;
    }

    public function setUpTo(?int $upTo): self
    {
        $this->upTo = $upTo;

        return $this;
    }

    public function getFlatAmount(): ?int
    {
        return $this->flatAmount;
    }

    public function setFlatAmount(?int $flatAmount): self
    {
        $this->flatAmount = $flatAmount;

        return $this;
    }

    public function getUnitAmount(): ?int
    {
        return $this->unitAmount;
    }

    public function setUnitAmount(?int $unitAmount): self
    {
        $this->unitAmount = $unitAmount;

        return $this;
    }
}
