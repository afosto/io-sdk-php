<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrGroupRouteReferencesOrdersItem
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $isInbound = false;
    /**
     * @var bool
     */
    protected $isBackordered = false;
    /**
     * @var bool
     */
    protected $isUnavailable;
    /**
     * @var OdrGroupRouteReferencesOrdersItemWarehouse
     */
    protected $warehouse;
    /**
     * @var OdrGroupRouteReferencesOrdersItemShipmentsItem[]
     */
    protected $shipments;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIsInbound(): ?bool
    {
        return $this->isInbound;
    }

    public function setIsInbound(?bool $isInbound): self
    {
        $this->isInbound = $isInbound;

        return $this;
    }

    public function getIsBackordered(): ?bool
    {
        return $this->isBackordered;
    }

    public function setIsBackordered(?bool $isBackordered): self
    {
        $this->isBackordered = $isBackordered;

        return $this;
    }

    public function getIsUnavailable(): ?bool
    {
        return $this->isUnavailable;
    }

    public function setIsUnavailable(?bool $isUnavailable): self
    {
        $this->isUnavailable = $isUnavailable;

        return $this;
    }

    public function getWarehouse(): ?OdrGroupRouteReferencesOrdersItemWarehouse
    {
        return $this->warehouse;
    }

    public function setWarehouse(?OdrGroupRouteReferencesOrdersItemWarehouse $warehouse): self
    {
        $this->warehouse = $warehouse;

        return $this;
    }

    /**
     * @return OdrGroupRouteReferencesOrdersItemShipmentsItem[]|null
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }

    /**
     * @param OdrGroupRouteReferencesOrdersItemShipmentsItem[]|null $shipments
     */
    public function setShipments(?array $shipments): self
    {
        $this->shipments = $shipments;

        return $this;
    }
}
