<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrMethod
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $providerCode;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var bool
     */
    protected $isPrepaid;
    /**
     * @var OdrIssuer[]
     */
    protected $issuers;
    /**
     * @var bool
     */
    protected $isEnabled = true;
    /**
     * @var bool
     */
    protected $isDeferred = false;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getIsPrepaid(): ?bool
    {
        return $this->isPrepaid;
    }

    public function setIsPrepaid(?bool $isPrepaid): self
    {
        $this->isPrepaid = $isPrepaid;

        return $this;
    }

    /**
     * @return OdrIssuer[]|null
     */
    public function getIssuers(): ?array
    {
        return $this->issuers;
    }

    /**
     * @param OdrIssuer[]|null $issuers
     */
    public function setIssuers(?array $issuers): self
    {
        $this->issuers = $issuers;

        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function getIsDeferred(): ?bool
    {
        return $this->isDeferred;
    }

    public function setIsDeferred(?bool $isDeferred): self
    {
        $this->isDeferred = $isDeferred;

        return $this;
    }
}
