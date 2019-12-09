<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrFilterSet
{
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var mixed
     */
    protected $filters;

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param mixed $filters
     */
    public function setFilters($filters): self
    {
        $this->filters = $filters;

        return $this;
    }
}