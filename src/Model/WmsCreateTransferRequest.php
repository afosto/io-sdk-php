<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsCreateTransferRequest
{
    /**
     * Target location.
     *
     * @var string
     */
    protected $target;
    /**
     * Optional value: use when order should be collected in single location.
     *
     * @var string
     */
    protected $collectAt;
    /**
     * @var string[]
     */
    protected $claims;

    /**
     * Target location.
     *
     * @return string|null
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

    /**
     * Target location.
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
     * Optional value: use when order should be collected in single location.
     *
     * @return string|null
     */
    public function getCollectAt(): ?string
    {
        return $this->collectAt;
    }

    /**
     * Optional value: use when order should be collected in single location.
     *
     * @param string|null $collectAt
     *
     * @return self
     */
    public function setCollectAt(?string $collectAt): self
    {
        $this->collectAt = $collectAt;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getClaims(): ?array
    {
        return $this->claims;
    }

    /**
     * @param string[]|null $claims
     *
     * @return self
     */
    public function setClaims(?array $claims): self
    {
        $this->claims = $claims;

        return $this;
    }
}