<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrPayment
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $secret;
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var string
     */
    protected $providerCode;
    /**
     * @var string
     */
    protected $methodCode;
    /**
     * @var string
     */
    protected $issuerCode;
    /**
     * @var bool
     */
    protected $isRefund = false;
    /**
     * @var bool
     */
    protected $isPending = true;
    /**
     * @var bool
     */
    protected $isPaid = false;
    /**
     * @var bool
     */
    protected $isAuthorized = true;
    /**
     * @var bool
     */
    protected $isCaptured = false;
    /**
     * @var string
     */
    protected $returnUrl;
    /**
     * @var string
     */
    protected $sourcePaymentId;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var \DateTime
     */
    protected $paidAt;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;

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

    public function getProviderCode(): ?string
    {
        return $this->providerCode;
    }

    public function setProviderCode(?string $providerCode): self
    {
        $this->providerCode = $providerCode;

        return $this;
    }

    public function getMethodCode(): ?string
    {
        return $this->methodCode;
    }

    public function setMethodCode(?string $methodCode): self
    {
        $this->methodCode = $methodCode;

        return $this;
    }

    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    public function setIssuerCode(?string $issuerCode): self
    {
        $this->issuerCode = $issuerCode;

        return $this;
    }

    public function getIsRefund(): ?bool
    {
        return $this->isRefund;
    }

    public function setIsRefund(?bool $isRefund): self
    {
        $this->isRefund = $isRefund;

        return $this;
    }

    public function getIsPending(): ?bool
    {
        return $this->isPending;
    }

    public function setIsPending(?bool $isPending): self
    {
        $this->isPending = $isPending;

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

    public function getIsAuthorized(): ?bool
    {
        return $this->isAuthorized;
    }

    public function setIsAuthorized(?bool $isAuthorized): self
    {
        $this->isAuthorized = $isAuthorized;

        return $this;
    }

    public function getIsCaptured(): ?bool
    {
        return $this->isCaptured;
    }

    public function setIsCaptured(?bool $isCaptured): self
    {
        $this->isCaptured = $isCaptured;

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

    public function getSourcePaymentId(): ?string
    {
        return $this->sourcePaymentId;
    }

    public function setSourcePaymentId(?string $sourcePaymentId): self
    {
        $this->sourcePaymentId = $sourcePaymentId;

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

    public function getPaidAt(): ?\DateTime
    {
        return $this->paidAt;
    }

    public function setPaidAt(?\DateTime $paidAt): self
    {
        $this->paidAt = $paidAt;

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

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
