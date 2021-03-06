<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class IamInvoice
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $total;
    /**
     * @var bool
     */
    protected $isPaid;
    /**
     * @var bool
     */
    protected $isPending;
    /**
     * @var bool
     */
    protected $isCancelled;
    /**
     * @var \DateTime
     */
    protected $invoicedAt;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var IamProduct[]
     */
    protected $products;
    /**
     * @var string
     */
    protected $pdf;
    /**
     * @var string
     */
    protected $paymentUrl;
    /**
     * @var \DateTime
     */
    protected $startAt;
    /**
     * @var \DateTime
     */
    protected $endAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

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

    public function getIsPending(): ?bool
    {
        return $this->isPending;
    }

    public function setIsPending(?bool $isPending): self
    {
        $this->isPending = $isPending;

        return $this;
    }

    public function getIsCancelled(): ?bool
    {
        return $this->isCancelled;
    }

    public function setIsCancelled(?bool $isCancelled): self
    {
        $this->isCancelled = $isCancelled;

        return $this;
    }

    public function getInvoicedAt(): ?\DateTime
    {
        return $this->invoicedAt;
    }

    public function setInvoicedAt(?\DateTime $invoicedAt): self
    {
        $this->invoicedAt = $invoicedAt;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return IamProduct[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param IamProduct[]|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;

        return $this;
    }

    public function getPdf(): ?string
    {
        return $this->pdf;
    }

    public function setPdf(?string $pdf): self
    {
        $this->pdf = $pdf;

        return $this;
    }

    public function getPaymentUrl(): ?string
    {
        return $this->paymentUrl;
    }

    public function setPaymentUrl(?string $paymentUrl): self
    {
        $this->paymentUrl = $paymentUrl;

        return $this;
    }

    public function getStartAt(): ?\DateTime
    {
        return $this->startAt;
    }

    public function setStartAt(?\DateTime $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public function getEndAt(): ?\DateTime
    {
        return $this->endAt;
    }

    public function setEndAt(?\DateTime $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }
}
