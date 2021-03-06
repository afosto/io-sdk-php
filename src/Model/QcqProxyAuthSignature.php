<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class QcqProxyAuthSignature
{
    /**
     * @var string
     */
    protected $secret;
    /**
     * @var QcqAuthConfig
     */
    protected $auth;
    /**
     * @var QcqCacheConfig
     */
    protected $cache;

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    public function getAuth(): ?QcqAuthConfig
    {
        return $this->auth;
    }

    public function setAuth(?QcqAuthConfig $auth): self
    {
        $this->auth = $auth;

        return $this;
    }

    public function getCache(): ?QcqCacheConfig
    {
        return $this->cache;
    }

    public function setCache(?QcqCacheConfig $cache): self
    {
        $this->cache = $cache;

        return $this;
    }
}
