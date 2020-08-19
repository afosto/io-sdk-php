<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntWatcherModel
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $filesystemId;
    /**
     * @var CntWatcherSource
     */
    protected $source;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFilesystemId(): ?int
    {
        return $this->filesystemId;
    }

    public function setFilesystemId(?int $filesystemId): self
    {
        $this->filesystemId = $filesystemId;

        return $this;
    }

    public function getSource(): ?CntWatcherSource
    {
        return $this->source;
    }

    public function setSource(?CntWatcherSource $source): self
    {
        $this->source = $source;

        return $this;
    }
}
