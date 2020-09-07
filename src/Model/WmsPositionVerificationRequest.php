<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsPositionVerificationRequest
{
    /**
     * @var string[]
     */
    protected $overage;
    /**
     * @var string[]
     */
    protected $missingIds;

    /**
     * @return string[]|null
     */
    public function getOverage(): ?array
    {
        return $this->overage;
    }

    /**
     * @param string[]|null $overage
     */
    public function setOverage(?array $overage): self
    {
        $this->overage = $overage;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getMissingIds(): ?array
    {
        return $this->missingIds;
    }

    /**
     * @param string[]|null $missingIds
     */
    public function setMissingIds(?array $missingIds): self
    {
        $this->missingIds = $missingIds;

        return $this;
    }
}
