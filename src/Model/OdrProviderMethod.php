<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrProviderMethod
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var OdrIssuer[]
     */
    protected $issuers;
    /**
     * @var mixed
     */
    protected $metadata;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

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

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }
}
