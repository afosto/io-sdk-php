<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class QcqProxyModelAuth
{
    /**
     * @var QcqProxyModelAuthSignature
     */
    protected $signature;

    public function getSignature(): ?QcqProxyModelAuthSignature
    {
        return $this->signature;
    }

    public function setSignature(?QcqProxyModelAuthSignature $signature): self
    {
        $this->signature = $signature;

        return $this;
    }
}
