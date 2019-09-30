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

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsConfigured(): ?bool
    {
        return $this->isConfigured;
    }

    /**
     * @param bool|null $isConfigured
     *
     * @return self
     */
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
     *
     * @return self
     */
    public function setMethods(?array $methods): self
    {
        $this->methods = $methods;

        return $this;
    }
}
