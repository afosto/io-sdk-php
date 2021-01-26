<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrGroupAttachReferences
{
    /**
     * @var OdrGroupAttachReferencesOrdersItem[]
     */
    protected $orders;
    /**
     * @var string[]
     */
    protected $backorders;

    /**
     * @return OdrGroupAttachReferencesOrdersItem[]|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * @param OdrGroupAttachReferencesOrdersItem[]|null $orders
     */
    public function setOrders(?array $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getBackorders(): ?array
    {
        return $this->backorders;
    }

    /**
     * @param string[]|null $backorders
     */
    public function setBackorders(?array $backorders): self
    {
        $this->backorders = $backorders;

        return $this;
    }
}
