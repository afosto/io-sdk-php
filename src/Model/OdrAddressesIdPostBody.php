<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrAddressesIdPostBody
{
    /**
     * @var string
     */
    protected $originCountry;

    /**
     * @return string|null
     */
    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }

    /**
     * @param string|null $originCountry
     *
     * @return self
     */
    public function setOriginCountry(?string $originCountry): self
    {
        $this->originCountry = $originCountry;

        return $this;
    }
}