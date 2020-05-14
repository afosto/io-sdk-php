<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrPreset
{
    /**
     * @var string
     */
    protected $methodCode;
    /**
     * @var string
     */
    protected $issuerCode;
    /**
     * @var string
     */
    protected $providerCode;

    public function getMethodCode(): ?string
    {
        return $this->methodCode;
    }

    public function setMethodCode(?string $methodCode): self
    {
        $this->methodCode = $methodCode;

        return $this;
    }

    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    public function setIssuerCode(?string $issuerCode): self
    {
        $this->issuerCode = $issuerCode;

        return $this;
    }

    public function getProviderCode(): ?string
    {
        return $this->providerCode;
    }

    public function setProviderCode(?string $providerCode): self
    {
        $this->providerCode = $providerCode;

        return $this;
    }
}
