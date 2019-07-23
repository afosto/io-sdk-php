<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class SplHubNetwork
{
    /**
     * @var string
     */
    protected $ipAddress;
    /**
     * @var string
     */
    protected $remoteIpAddress;
    /**
     * @var \DateTime
     */
    protected $lastConnectedAt;

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     *
     * @return self
     */
    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRemoteIpAddress(): ?string
    {
        return $this->remoteIpAddress;
    }

    /**
     * @param string|null $remoteIpAddress
     *
     * @return self
     */
    public function setRemoteIpAddress(?string $remoteIpAddress): self
    {
        $this->remoteIpAddress = $remoteIpAddress;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastConnectedAt(): ?\DateTime
    {
        return $this->lastConnectedAt;
    }

    /**
     * @param \DateTime|null $lastConnectedAt
     *
     * @return self
     */
    public function setLastConnectedAt(?\DateTime $lastConnectedAt): self
    {
        $this->lastConnectedAt = $lastConnectedAt;

        return $this;
    }
}
