<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelAddressList
{
    /**
     * @var RelAddress
     */
    protected $primary;
    /**
     * @var RelAddress[]
     */
    protected $secondary;

    public function getPrimary(): ?RelAddress
    {
        return $this->primary;
    }

    public function setPrimary(?RelAddress $primary): self
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * @return RelAddress[]|null
     */
    public function getSecondary(): ?array
    {
        return $this->secondary;
    }

    /**
     * @param RelAddress[]|null $secondary
     */
    public function setSecondary(?array $secondary): self
    {
        $this->secondary = $secondary;

        return $this;
    }
}
