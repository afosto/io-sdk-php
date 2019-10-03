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
     * @var string
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
     * @var string
     */
    protected $returnUrl;
    /**
     * @var string
     */
    protected $webhookUrl;
    /**
     * @var string
     */
    protected $clientId;

    /**
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     *
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     *
     * @return self
     */
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
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return OdrPurchase|null
     */
    public function getPurchase(): ?OdrPurchase
    {
        return $this->purchase;
    }

    /**
     * @param OdrPurchase|null $purchase
     *
     * @return self
     */
    public function setPurchase(?OdrPurchase $purchase): self
    {
        $this->purchase = $purchase;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @param string|null $returnUrl
     *
     * @return self
     */
    public function setReturnUrl(?string $returnUrl): self
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebhookUrl(): ?string
    {
        return $this->webhookUrl;
    }

    /**
     * @param string|null $webhookUrl
     *
     * @return self
     */
    public function setWebhookUrl(?string $webhookUrl): self
    {
        $this->webhookUrl = $webhookUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     *
     * @return self
     */
    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }
}
