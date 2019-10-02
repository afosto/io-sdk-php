<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrPaymentIntent
{
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var string
     */
    protected $providerCode;
    /**
     * @var string
     */
    protected $methodCode;
    /**
     * @var string
     */
    protected $issuerCode;
    /**
     * @var mixed
     */
    protected $metadata;

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     *
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->providerCode;
    }

    /**
     * @param string|null $providerCode
     *
     * @return self
     */
    public function setProviderCode(?string $providerCode): self
    {
        $this->providerCode = $providerCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMethodCode(): ?string
    {
        return $this->methodCode;
    }

    /**
     * @param string|null $methodCode
     *
     * @return self
     */
    public function setMethodCode(?string $methodCode): self
    {
        $this->methodCode = $methodCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    /**
     * @param string|null $issuerCode
     *
     * @return self
     */
    public function setIssuerCode(?string $issuerCode): self
    {
        $this->issuerCode = $issuerCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }
}