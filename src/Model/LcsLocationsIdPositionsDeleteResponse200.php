<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsLocationsIdPositionsDeleteResponse200
{
    /**
     * @var int
     */
    protected $success;

    public function getSuccess(): ?int
    {
        return $this->success;
    }

    public function setSuccess(?int $success): self
    {
        $this->success = $success;

        return $this;
    }
}
