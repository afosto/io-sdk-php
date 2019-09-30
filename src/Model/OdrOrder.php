<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrOrder
{
    /**
     * @var string
     */
    protected $customerId;
    /**
     * @var string
     */
    protected $addressSetId;
    /**
     * @var OdrItem[]
     */
    protected $items;

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressSetId(): ?string
    {
        return $this->addressSetId;
    }

    /**
     * @param string|null $addressSetId
     *
     * @return self
     */
    public function setAddressSetId(?string $addressSetId): self
    {
        $this->addressSetId = $addressSetId;

        return $this;
    }

    /**
     * @return OdrItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param OdrItem[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
