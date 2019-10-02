<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrClaimCreate
{
    /**
     * @var string
     */
    protected $type;
    /**
     * Location id.
     *
     * @var string
     */
    protected $target;
    /**
     * @var OdrStackReference
     */
    protected $stack;
    /**
     * @var string[]
     */
    protected $warehouses;
    /**
     * Only allowed for reservations.
     *
     * @var \DateTime
     */
    protected $expiresAt;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Location id.
     *
     * @return string|null
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

    /**
     * Location id.
     *
     * @param string|null $target
     *
     * @return self
     */
    public function setTarget(?string $target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return OdrStackReference|null
     */
    public function getStack(): ?OdrStackReference
    {
        return $this->stack;
    }

    /**
     * @param OdrStackReference|null $stack
     *
     * @return self
     */
    public function setStack(?OdrStackReference $stack): self
    {
        $this->stack = $stack;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getWarehouses(): ?array
    {
        return $this->warehouses;
    }

    /**
     * @param string[]|null $warehouses
     *
     * @return self
     */
    public function setWarehouses(?array $warehouses): self
    {
        $this->warehouses = $warehouses;

        return $this;
    }

    /**
     * Only allowed for reservations.
     *
     * @return \DateTime|null
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    /**
     * Only allowed for reservations.
     *
     * @param \DateTime|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?\DateTime $expiresAt): self
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }
}