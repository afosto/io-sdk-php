<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrTransactionModel
{
    /**
     * @var OdrReference
     */
    protected $reference;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var string
     */
    protected $currency = 'EUR';
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var OdrPurchase
     */
    protected $purchase;
    /**
     * @var OdrPreset
     */
    protected $preset;
    /**
     * @var string
     */
    protected $returnUrl;
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var string
     */
    protected $channelId;

    public function getReference(): ?OdrReference
    {
        return $this->reference;
    }

    public function setReference(?OdrReference $reference): self
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

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

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

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    public function getPurchase(): ?OdrPurchase
    {
        return $this->purchase;
    }

    public function setPurchase(?OdrPurchase $purchase): self
    {
        $this->purchase = $purchase;

        return $this;
    }

    public function getPreset(): ?OdrPreset
    {
        return $this->preset;
    }

    public function setPreset(?OdrPreset $preset): self
    {
        $this->preset = $preset;

        return $this;
    }

    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    public function setReturnUrl(?string $returnUrl): self
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;

        return $this;
    }
}
