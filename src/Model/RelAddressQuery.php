<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelAddressQuery
{
    /**
     * @var string
     */
    protected $sessionKey;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var string
     */
    protected $query;

    public function getSessionKey(): ?string
    {
        return $this->sessionKey;
    }

    public function setSessionKey(?string $sessionKey): self
    {
        $this->sessionKey = $sessionKey;

        return $this;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(?string $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(?string $query): self
    {
        $this->query = $query;

        return $this;
    }
}
