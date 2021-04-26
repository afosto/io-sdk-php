<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrCouponModel
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var OdrCouponUsage
     */
    protected $usage;
    /**
     * @var string
     */
    protected $categoryId;
    /**
     * @var \DateTime
     */
    protected $expiresAt;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getUsage(): ?OdrCouponUsage
    {
        return $this->usage;
    }

    public function setUsage(?OdrCouponUsage $usage): self
    {
        $this->usage = $usage;

        return $this;
    }

    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    public function setCategoryId(?string $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(?\DateTime $expiresAt): self
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }
}
