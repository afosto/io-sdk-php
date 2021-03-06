<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrProvider
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var bool
     */
    protected $isActive;
    /**
     * @var bool
     */
    protected $isConfigured;
    /**
     * @var OdrProviderMethod[]
     */
    protected $methods;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsConfigured(): ?bool
    {
        return $this->isConfigured;
    }

    public function setIsConfigured(?bool $isConfigured): self
    {
        $this->isConfigured = $isConfigured;

        return $this;
    }

    /**
     * @return OdrProviderMethod[]|null
     */
    public function getMethods(): ?array
    {
        return $this->methods;
    }

    /**
     * @param OdrProviderMethod[]|null $methods
     */
    public function setMethods(?array $methods): self
    {
        $this->methods = $methods;

        return $this;
    }
}
