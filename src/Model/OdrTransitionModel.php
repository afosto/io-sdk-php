<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrTransitionModel
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var OdrSearchConstraint[]
     */
    protected $constraints;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return OdrSearchConstraint[]|null
     */
    public function getConstraints(): ?array
    {
        return $this->constraints;
    }

    /**
     * @param OdrSearchConstraint[]|null $constraints
     */
    public function setConstraints(?array $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }
}
