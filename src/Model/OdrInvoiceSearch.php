<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrInvoiceSearch
{
    /**
     * @var OdrInvoiceSearchConstraint[]
     */
    protected $constraints;

    /**
     * @return OdrInvoiceSearchConstraint[]|null
     */
    public function getConstraints(): ?array
    {
        return $this->constraints;
    }

    /**
     * @param OdrInvoiceSearchConstraint[]|null $constraints
     */
    public function setConstraints(?array $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }
}
