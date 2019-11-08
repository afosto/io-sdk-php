<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsParcelCreateModel
{
    /**
     * @var string
     */
    protected $shipmentId;
    /**
     * @var int
     */
    protected $weight;
    /**
     * @var int
     */
    protected $length;
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $height;
    /**
     * @var string
     */
    protected $trackingCode;
    /**
     * @var string
     */
    protected $trackingUrl;
    /**
     * @var string[]
     */
    protected $itemIds;

    /**
     * @return string|null
     */
    public function getShipmentId(): ?string
    {
        return $this->shipmentId;
    }

    /**
     * @param string|null $shipmentId
     *
     * @return self
     */
    public function setShipmentId(?string $shipmentId): self
    {
        $this->shipmentId = $shipmentId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param int|null $weight
     *
     * @return self
     */
    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLength(): ?int
    {
        return $this->length;
    }

    /**
     * @param int|null $length
     *
     * @return self
     */
    public function setLength(?int $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int|null $width
     *
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int|null $height
     *
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTrackingCode(): ?string
    {
        return $this->trackingCode;
    }

    /**
     * @param string|null $trackingCode
     *
     * @return self
     */
    public function setTrackingCode(?string $trackingCode): self
    {
        $this->trackingCode = $trackingCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }

    /**
     * @param string|null $trackingUrl
     *
     * @return self
     */
    public function setTrackingUrl(?string $trackingUrl): self
    {
        $this->trackingUrl = $trackingUrl;

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
     *
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;

        return $this;
    }
}