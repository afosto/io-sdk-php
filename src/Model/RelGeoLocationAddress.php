<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelGeoLocationAddress
{
    /**
     * @var string
     */
    protected $premiseNumber;
    /**
     * @var string
     */
    protected $thoroughfare;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $locality;
    /**
     * @var string
     */
    protected $administrativeArea;
    /**
     * @var string
     */
    protected $countryCode;

    public function getPremiseNumber(): ?string
    {
        return $this->premiseNumber;
    }

    public function setPremiseNumber(?string $premiseNumber): self
    {
        $this->premiseNumber = $premiseNumber;

        return $this;
    }

    public function getThoroughfare(): ?string
    {
        return $this->thoroughfare;
    }

    public function setThoroughfare(?string $thoroughfare): self
    {
        $this->thoroughfare = $thoroughfare;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function setLocality(?string $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    public function getAdministrativeArea(): ?string
    {
        return $this->administrativeArea;
    }

    public function setAdministrativeArea(?string $administrativeArea): self
    {
        $this->administrativeArea = $administrativeArea;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}