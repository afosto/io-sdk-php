<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsCreateClaimRequest
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
     * @var WmsStackReference
     */
    protected $stack;
    /**
     * Only allowed for reservations.
     *
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * @var WmsConstraint[]
     */
    protected $constraints;
    /**
     * @var WmsSort[]
     */
    protected $sorts;

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
     * @return WmsStackReference|null
     */
    public function getStack(): ?WmsStackReference
    {
        return $this->stack;
    }

    /**
     * @param WmsStackReference|null $stack
     *
     * @return self
     */
    public function setStack(?WmsStackReference $stack): self
    {
        $this->stack = $stack;

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

    /**
     * @return WmsConstraint[]|null
     */
    public function getConstraints(): ?array
    {
        return $this->constraints;
    }

    /**
     * @param WmsConstraint[]|null $constraints
     *
     * @return self
     */
    public function setConstraints(?array $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }

    /**
     * @return WmsSort[]|null
     */
    public function getSorts(): ?array
    {
        return $this->sorts;
    }

    /**
     * @param WmsSort[]|null $sorts
     *
     * @return self
     */
    public function setSorts(?array $sorts): self
    {
        $this->sorts = $sorts;

        return $this;
    }
}
