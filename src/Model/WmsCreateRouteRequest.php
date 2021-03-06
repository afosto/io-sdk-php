<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsCreateRouteRequest
{
    /**
     * @var string
     */
    protected $name;
    /**
     * Location id.
     *
     * @var string
     */
    protected $from;
    /**
     * Location id.
     *
     * @var string
     */
    protected $to;
    /**
     * @var string[]
     */
    protected $hops;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Location id.
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Location id.
     */
    public function setFrom(?string $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Location id.
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * Location id.
     */
    public function setTo(?string $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getHops(): ?array
    {
        return $this->hops;
    }

    /**
     * @param string[]|null $hops
     */
    public function setHops(?array $hops): self
    {
        $this->hops = $hops;

        return $this;
    }
}
