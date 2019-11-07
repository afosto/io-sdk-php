<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsLocationsIdPositionsPutResponse200
{
    /**
     * @var int
     */
    protected $success;

    /**
     * @return int|null
     */
    public function getSuccess(): ?int
    {
        return $this->success;
    }

    /**
     * @param int|null $success
     *
     * @return self
     */
    public function setSuccess(?int $success): self
    {
        $this->success = $success;

        return $this;
    }
}
