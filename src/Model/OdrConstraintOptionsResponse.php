<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrConstraintOptionsResponse
{
    /**
     * @var string[]
     */
    protected $amount;

    /**
     * @return string[]|null
     */
    public function getAmount(): ?array
    {
        return $this->amount;
    }

    /**
     * @param string[]|null $amount
     */
    public function setAmount(?array $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}