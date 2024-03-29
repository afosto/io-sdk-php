<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrOrderAcceptances
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var bool
     */
    protected $isPrepaid;
    /**
     * @var bool
     */
    protected $isSettlement;
    /**
     * @var bool
     */
    protected $isPaid;
    /**
     * @var string
     */
    protected $calculationId;
    /**
     * @var string
     */
    protected $transactionSecret;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $acceptedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

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

    public function getIsPrepaid(): ?bool
    {
        return $this->isPrepaid;
    }

    public function setIsPrepaid(?bool $isPrepaid): self
    {
        $this->isPrepaid = $isPrepaid;

        return $this;
    }

    public function getIsSettlement(): ?bool
    {
        return $this->isSettlement;
    }

    public function setIsSettlement(?bool $isSettlement): self
    {
        $this->isSettlement = $isSettlement;

        return $this;
    }

    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    public function setIsPaid(?bool $isPaid): self
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    public function getCalculationId(): ?string
    {
        return $this->calculationId;
    }

    public function setCalculationId(?string $calculationId): self
    {
        $this->calculationId = $calculationId;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getAcceptedAt(): ?\DateTime
    {
        return $this->acceptedAt;
    }

    public function setAcceptedAt(?\DateTime $acceptedAt): self
    {
        $this->acceptedAt = $acceptedAt;

        return $this;
    }
}
