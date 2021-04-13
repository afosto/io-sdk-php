<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsPoint
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $carrier;
    /**
     * @var float
     */
    protected $latitude;
    /**
     * @var float
     */
    protected $longitude;
    /**
     * @var LcsAddress
     */
    protected $address;
    /**
     * @var LcsPointOpenings[]
     */
    protected $openings;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    public function setCarrier(?string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getAddress(): ?LcsAddress
    {
        return $this->address;
    }

    public function setAddress(?LcsAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return LcsPointOpenings[]|null
     */
    public function getOpenings(): ?array
    {
        return $this->openings;
    }

    /**
     * @param LcsPointOpenings[]|null $openings
     */
    public function setOpenings(?array $openings): self
    {
        $this->openings = $openings;

        return $this;
    }
}
