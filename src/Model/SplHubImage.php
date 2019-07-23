<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class SplHubImage
{
    /**
     * @var bool
     */
    protected $isUpToDate;
    /**
     * @var int
     */
    protected $downloadProgress;
    /**
     * @var string
     */
    protected $version;

    /**
     * @return bool|null
     */
    public function getIsUpToDate(): ?bool
    {
        return $this->isUpToDate;
    }

    /**
     * @param bool|null $isUpToDate
     *
     * @return self
     */
    public function setIsUpToDate(?bool $isUpToDate): self
    {
        $this->isUpToDate = $isUpToDate;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDownloadProgress(): ?int
    {
        return $this->downloadProgress;
    }

    /**
     * @param int|null $downloadProgress
     *
     * @return self
     */
    public function setDownloadProgress(?int $downloadProgress): self
    {
        $this->downloadProgress = $downloadProgress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }
}
