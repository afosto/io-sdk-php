<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CatVat
{
    /**
     * @var int
     */
    protected $rate;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $administrativeArea;

    /**
     * @return int|null
     */
    public function getRate(): ?int
    {
        return $this->rate;
    }

    /**
     * @param int|null $rate
     *
     * @return self
     */
    public function setRate(?int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdministrativeArea(): ?string
    {
        return $this->administrativeArea;
    }

    /**
     * @param string|null $administrativeArea
     *
     * @return self
     */
    public function setAdministrativeArea(?string $administrativeArea): self
    {
        $this->administrativeArea = $administrativeArea;

        return $this;
    }
}