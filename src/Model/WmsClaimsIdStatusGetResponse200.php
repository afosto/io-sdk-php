<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsClaimsIdStatusGetResponse200
{
    /**
     * @var bool
     */
    protected $isCancelable;
    /**
     * @var bool
     */
    protected $withWarning;

    public function getIsCancelable(): ?bool
    {
        return $this->isCancelable;
    }

    public function setIsCancelable(?bool $isCancelable): self
    {
        $this->isCancelable = $isCancelable;

        return $this;
    }

    public function getWithWarning(): ?bool
    {
        return $this->withWarning;
    }

    public function setWithWarning(?bool $withWarning): self
    {
        $this->withWarning = $withWarning;

        return $this;
    }
}