<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntStorageSyncRequest
{
    /**
     * @var string
     */
    protected $fileId;
    /**
     * Overwrite the file path.
     *
     * @var string
     */
    protected $path;

    public function getFileId(): ?string
    {
        return $this->fileId;
    }

    public function setFileId(?string $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Overwrite the file path.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Overwrite the file path.
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }
}
