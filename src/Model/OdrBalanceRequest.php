<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrBalanceRequest
{
    /**
     * @var OdrKey
     */
    protected $key;
    /**
     * @var OdrKey
     */
    protected $reference;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $currency = 'EUR';
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var int
     */
    protected $overdraftAllowance;

    public function getKey(): ?OdrKey
    {
        return $this->key;
    }

    public function setKey(?OdrKey $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getReference(): ?OdrKey
    {
        return $this->reference;
    }

    public function setReference(?OdrKey $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getOverdraftAllowance(): ?int
    {
        return $this->overdraftAllowance;
    }

    public function setOverdraftAllowance(?int $overdraftAllowance): self
    {
        $this->overdraftAllowance = $overdraftAllowance;

        return $this;
    }
}
