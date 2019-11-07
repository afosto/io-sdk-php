<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsShipmentItem
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var string
     */
    protected $position;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $isBoxed;
    /**
     * @var bool
     */
    protected $isListed;
    /**
     * @var string
     */
    protected $hsCode;
    /**
     * @var LcsServiceOption[]
     */
    protected $service;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string|null $position
     *
     * @return self
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;

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
     * @return bool|null
     */
    public function getIsBoxed(): ?bool
    {
        return $this->isBoxed;
    }

    /**
     * @param bool|null $isBoxed
     *
     * @return self
     */
    public function setIsBoxed(?bool $isBoxed): self
    {
        $this->isBoxed = $isBoxed;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsListed(): ?bool
    {
        return $this->isListed;
    }

    /**
     * @param bool|null $isListed
     *
     * @return self
     */
    public function setIsListed(?bool $isListed): self
    {
        $this->isListed = $isListed;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }

    /**
     * @param string|null $hsCode
     *
     * @return self
     */
    public function setHsCode(?string $hsCode): self
    {
        $this->hsCode = $hsCode;

        return $this;
    }

    /**
     * @return LcsServiceOption[]|null
     */
    public function getService(): ?array
    {
        return $this->service;
    }

    /**
     * @param LcsServiceOption[]|null $service
     *
     * @return self
     */
    public function setService(?array $service): self
    {
        $this->service = $service;

        return $this;
    }
}
