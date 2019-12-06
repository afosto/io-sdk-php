<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrPurchase
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
     * @var OdrPurchaseItem[]
     */
    protected $items;

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getAddressSetId(): ?string
    {
        return $this->addressSetId;
    }

    public function setAddressSetId(?string $addressSetId): self
    {
        $this->addressSetId = $addressSetId;

        return $this;
    }

    /**
     * @return OdrPurchaseItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param OdrPurchaseItem[]|null $items
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
