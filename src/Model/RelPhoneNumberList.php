<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelPhoneNumberList
{
    /**
     * @var RelPhoneNumber
     */
    protected $primary;
    /**
     * @var RelPhoneNumber[]
     */
    protected $secondary;

    public function getPrimary(): ?RelPhoneNumber
    {
        return $this->primary;
    }

    public function setPrimary(?RelPhoneNumber $primary): self
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * @return RelPhoneNumber[]|null
     */
    public function getSecondary(): ?array
    {
        return $this->secondary;
    }

    /**
     * @param RelPhoneNumber[]|null $secondary
     */
    public function setSecondary(?array $secondary): self
    {
        $this->secondary = $secondary;

        return $this;
    }
}
