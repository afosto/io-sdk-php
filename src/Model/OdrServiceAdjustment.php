<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrServiceAdjustment
{
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var bool
     */
    protected $isPercentage;
    /**
     * @var bool
     */
    protected $isDiscount;
    /**
     * @var OdrServiceAdjustmentResult
     */
    protected $result;

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
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

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getIsPercentage(): ?bool
    {
        return $this->isPercentage;
    }

    public function setIsPercentage(?bool $isPercentage): self
    {
        $this->isPercentage = $isPercentage;

        return $this;
    }

    public function getIsDiscount(): ?bool
    {
        return $this->isDiscount;
    }

    public function setIsDiscount(?bool $isDiscount): self
    {
        $this->isDiscount = $isDiscount;

        return $this;
    }

    public function getResult(): ?OdrServiceAdjustmentResult
    {
        return $this->result;
    }

    public function setResult(?OdrServiceAdjustmentResult $result): self
    {
        $this->result = $result;

        return $this;
    }
}
