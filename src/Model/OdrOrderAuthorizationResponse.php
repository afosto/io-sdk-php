<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrOrderAuthorizationResponse
{
    /**
     * @var bool
     */
    protected $isLocked = true;
    /**
     * @var bool
     */
    protected $isAccepted = false;
    /**
     * @var bool
     */
    protected $isConfirmed = false;
    /**
     * @var string
     */
    protected $transactionSecret;

    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }

    public function setIsLocked(?bool $isLocked): self
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    public function getIsAccepted(): ?bool
    {
        return $this->isAccepted;
    }

    public function setIsAccepted(?bool $isAccepted): self
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    public function getIsConfirmed(): ?bool
    {
        return $this->isConfirmed;
    }

    public function setIsConfirmed(?bool $isConfirmed): self
    {
        $this->isConfirmed = $isConfirmed;

        return $this;
    }

    public function getTransactionSecret(): ?string
    {
        return $this->transactionSecret;
    }

    public function setTransactionSecret(?string $transactionSecret): self
    {
        $this->transactionSecret = $transactionSecret;

        return $this;
    }
}
