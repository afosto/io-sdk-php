<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class IamQuery
{
    /**
     * @var IamQueryConstraint[]
     */
    protected $filter;
    /**
     * @var int
     */
    protected $limit;
    /**
     * @var int
     */
    protected $offset;

    /**
     * @return IamQueryConstraint[]|null
     */
    public function getFilter(): ?array
    {
        return $this->filter;
    }

    /**
     * @param IamQueryConstraint[]|null $filter
     */
    public function setFilter(?array $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->offset;
    }

    public function setOffset(?int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }
}
