<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelGeocodeRequest
{
    /**
     * Two letter counpremise_numbertry code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The address.
     *
     * @var string
     */
    protected $address;

    /**
     * Two letter counpremise_numbertry code.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Two letter counpremise_numbertry code.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * The address.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * The address.
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }
}