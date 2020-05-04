<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsStockUpRequest
{
    /**
     * @var string
     */
    protected $locationId;
    /**
     * @var WmsStackReference
     */
    protected $stack;

    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    public function setLocationId(?string $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    public function getStack(): ?WmsStackReference
    {
        return $this->stack;
    }

    public function setStack(?WmsStackReference $stack): self
    {
        $this->stack = $stack;

        return $this;
    }
}
