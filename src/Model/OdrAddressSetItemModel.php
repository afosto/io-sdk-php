<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrAddressSetItemModel
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var OdrAddress
     */
    protected $address;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return OdrAddress|null
     */
    public function getAddress(): ?OdrAddress
    {
        return $this->address;
    }

    /**
     * @param OdrAddress|null $address
     *
     * @return self
     */
    public function setAddress(?OdrAddress $address): self
    {
        $this->address = $address;

        return $this;
    }
}
