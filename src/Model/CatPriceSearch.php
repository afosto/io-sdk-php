<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CatPriceSearch
{
    /**
     * @var \DateTime
     */
    protected $activeAt;
    /**
     * @var CatPriceConstraint[]
     */
    protected $constraints;

    public function getActiveAt(): ?\DateTime
    {
        return $this->activeAt;
    }

    public function setActiveAt(?\DateTime $activeAt): self
    {
        $this->activeAt = $activeAt;

        return $this;
    }

    /**
     * @return CatPriceConstraint[]|null
     */
    public function getConstraints(): ?array
    {
        return $this->constraints;
    }

    /**
     * @param CatPriceConstraint[]|null $constraints
     */
    public function setConstraints(?array $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }
}
