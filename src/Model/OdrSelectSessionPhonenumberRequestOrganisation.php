<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrSelectSessionPhonenumberRequestOrganisation
{
    /**
     * @var bool
     */
    protected $primary;

    public function getPrimary(): ?bool
    {
        return $this->primary;
    }

    public function setPrimary(?bool $primary): self
    {
        $this->primary = $primary;

        return $this;
    }
}
