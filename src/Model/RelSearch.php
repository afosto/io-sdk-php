<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelSearch
{
    /**
     * @var RelConstraint[]
     */
    protected $constraints;

    /**
     * @return RelConstraint[]|null
     */
    public function getConstraints(): ?array
    {
        return $this->constraints;
    }

    /**
     * @param RelConstraint[]|null $constraints
     *
     * @return self
     */
    public function setConstraints(?array $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }
}
