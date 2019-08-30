<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrState
{
    /**
     * @var bool
     */
    protected $isConfirmed;
    /**
     * @var bool
     */
    protected $isAccepted;
    /**
     * @var bool
     */
    protected $isApproved;

    /**
     * @return bool|null
     */
    public function getIsConfirmed(): ?bool
    {
        return $this->isConfirmed;
    }

    /**
     * @param bool|null $isConfirmed
     *
     * @return self
     */
    public function setIsConfirmed(?bool $isConfirmed): self
    {
        $this->isConfirmed = $isConfirmed;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsAccepted(): ?bool
    {
        return $this->isAccepted;
    }

    /**
     * @param bool|null $isAccepted
     *
     * @return self
     */
    public function setIsAccepted(?bool $isAccepted): self
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsApproved(): ?bool
    {
        return $this->isApproved;
    }

    /**
     * @param bool|null $isApproved
     *
     * @return self
     */
    public function setIsApproved(?bool $isApproved): self
    {
        $this->isApproved = $isApproved;

        return $this;
    }
}
