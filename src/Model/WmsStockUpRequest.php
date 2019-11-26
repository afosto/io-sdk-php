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

    /**
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * @param string|null $locationId
     *
     * @return self
     */
    public function setLocationId(?string $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * @return WmsStackReference|null
     */
    public function getStack(): ?WmsStackReference
    {
        return $this->stack;
    }

    /**
     * @param WmsStackReference|null $stack
     *
     * @return self
     */
    public function setStack(?WmsStackReference $stack): self
    {
        $this->stack = $stack;

        return $this;
    }
}
