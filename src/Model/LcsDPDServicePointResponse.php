<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsDPDServicePointResponse
{
    /**
     * @var LcsDPDServicePointResponseParcelShopItem[]
     */
    protected $parcelShop;

    /**
     * @return LcsDPDServicePointResponseParcelShopItem[]|null
     */
    public function getParcelShop(): ?array
    {
        return $this->parcelShop;
    }

    /**
     * @param LcsDPDServicePointResponseParcelShopItem[]|null $parcelShop
     */
    public function setParcelShop(?array $parcelShop): self
    {
        $this->parcelShop = $parcelShop;

        return $this;
    }
}
