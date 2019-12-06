<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CatFiltersPutResponse200
{
    /**
     * @var int
     */
    protected $success;
    /**
     * @var int
     */
    protected $failed;

    public function getSuccess(): ?int
    {
        return $this->success;
    }

    public function setSuccess(?int $success): self
    {
        $this->success = $success;

        return $this;
    }

    public function getFailed(): ?int
    {
        return $this->failed;
    }

    public function setFailed(?int $failed): self
    {
        $this->failed = $failed;

        return $this;
    }
}
