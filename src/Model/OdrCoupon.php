<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrCoupon
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
     * @var OdrCouponClaimsItem[]
     */
    protected $claims;
    /**
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * @var \DateTime
     */
    protected $createdAt;

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

    /**
     * @return OdrCouponClaimsItem[]|null
     */
    public function getClaims(): ?array
    {
        return $this->claims;
    }

    /**
     * @param OdrCouponClaimsItem[]|null $claims
     */
    public function setClaims(?array $claims): self
    {
        $this->claims = $claims;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
