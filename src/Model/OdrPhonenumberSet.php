<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrPhonenumberSet
{
    /**
     * @var OdrPhonenumber
     */
    protected $primary;
    /**
     * @var OdrPhonenumber[]
     */
    protected $secondary;

    public function getPrimary(): ?OdrPhonenumber
    {
        return $this->primary;
    }

    public function setPrimary(?OdrPhonenumber $primary): self
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * @return OdrPhonenumber[]|null
     */
    public function getSecondary(): ?array
    {
        return $this->secondary;
    }

    /**
     * @param OdrPhonenumber[]|null $secondary
     */
    public function setSecondary(?array $secondary): self
    {
        $this->secondary = $secondary;

        return $this;
    }
}
