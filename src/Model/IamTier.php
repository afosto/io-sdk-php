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

    /**
     * @return int|null
     */
    public function getUpTo(): ?int
    {
        return $this->upTo;
    }

    /**
     * @param int|null $upTo
     *
     * @return self
     */
    public function setUpTo(?int $upTo): self
    {
        $this->upTo = $upTo;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getFlatAmount(): ?int
    {
        return $this->flatAmount;
    }

    /**
     * @param int|null $flatAmount
     *
     * @return self
     */
    public function setFlatAmount(?int $flatAmount): self
    {
        $this->flatAmount = $flatAmount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getUnitAmount(): ?int
    {
        return $this->unitAmount;
    }

    /**
     * @param int|null $unitAmount
     *
     * @return self
     */
    public function setUnitAmount(?int $unitAmount): self
    {
        $this->unitAmount = $unitAmount;

        return $this;
    }
}
