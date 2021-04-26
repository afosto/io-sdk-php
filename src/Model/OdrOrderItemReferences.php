<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrOrderItemReferences
{
    /**
     * @var OdrOrderItemReferencesOrder[]
     */
    protected $orders;
    /**
     * @var OdrStackReference[]
     */
    protected $stacks;

    /**
     * @return OdrOrderItemReferencesOrder[]|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * @param OdrOrderItemReferencesOrder[]|null $orders
     */
    public function setOrders(?array $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * @return OdrStackReference[]|null
     */
    public function getStacks(): ?array
    {
        return $this->stacks;
    }

    /**
     * @param OdrStackReference[]|null $stacks
     */
    public function setStacks(?array $stacks): self
    {
        $this->stacks = $stacks;

        return $this;
    }
}
