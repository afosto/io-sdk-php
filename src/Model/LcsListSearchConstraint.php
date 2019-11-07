<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsListSearchConstraint
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $operator;
    /**
     * @var string[]
     */
    protected $values;

    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param string|null $operator
     *
     * @return self
     */
    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * @param string[]|null $values
     *
     * @return self
     */
    public function setValues(?array $values): self
    {
        $this->values = $values;

        return $this;
    }
}
