<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrCouponCategoryModelDefaultsUsage
{
    /**
     * @var bool
     */
    protected $isUnlimited = false;
    /**
     * @var int
     */
    protected $limit;

    public function getIsUnlimited(): ?bool
    {
        return $this->isUnlimited;
    }

    public function setIsUnlimited(?bool $isUnlimited): self
    {
        $this->isUnlimited = $isUnlimited;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }
}