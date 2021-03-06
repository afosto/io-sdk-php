<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsPointsItem
{
    /**
     * @var float
     */
    protected $distance;
    /**
     * @var LcsPoint
     */
    protected $point;

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getPoint(): ?LcsPoint
    {
        return $this->point;
    }

    public function setPoint(?LcsPoint $point): self
    {
        $this->point = $point;

        return $this;
    }
}
