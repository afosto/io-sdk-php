<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsLocationPosition
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var int
     */
    protected $sorting;
    /**
     * @var LcsLocationSku[]
     */
    protected $skus;
    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSorting(): ?int
    {
        return $this->sorting;
    }

    /**
     * @param int|null $sorting
     *
     * @return self
     */
    public function setSorting(?int $sorting): self
    {
        $this->sorting = $sorting;

        return $this;
    }

    /**
     * @return LcsLocationSku[]|null
     */
    public function getSkus(): ?array
    {
        return $this->skus;
    }

    /**
     * @param LcsLocationSku[]|null $skus
     *
     * @return self
     */
    public function setSkus(?array $skus): self
    {
        $this->skus = $skus;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}