<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsUnavailableProjectionItem
{
    /**
     * @var string
     */
    protected $stackItemId;

    /**
     * @return string|null
     */
    public function getStackItemId(): ?string
    {
        return $this->stackItemId;
    }

    /**
     * @param string|null $stackItemId
     *
     * @return self
     */
    public function setStackItemId(?string $stackItemId): self
    {
        $this->stackItemId = $stackItemId;

        return $this;
    }
}