<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class IamPhoneNumberModel
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $countryCode;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $preferredAgent;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getPreferredAgent(): ?string
    {
        return $this->preferredAgent;
    }

    public function setPreferredAgent(?string $preferredAgent): self
    {
        $this->preferredAgent = $preferredAgent;

        return $this;
    }
}