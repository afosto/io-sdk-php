<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsGroupedShipmentItemPositions
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string[]
     */
    protected $itemIds;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * @param string[]|null $itemIds
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;

        return $this;
    }
}