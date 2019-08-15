<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class IamSubtenantsAuthorizationsRequestsIdPutBody
{
    /**
     * @var string
     */
    protected $state;

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }
}
