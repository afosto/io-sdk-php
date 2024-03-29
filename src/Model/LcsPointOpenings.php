<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsPointOpenings
{
    /**
     * @var float
     */
    protected $weekday;
    /**
     * @var LcsPointOpeningsWindows[]
     */
    protected $windows;

    public function getWeekday(): ?float
    {
        return $this->weekday;
    }

    public function setWeekday(?float $weekday): self
    {
        $this->weekday = $weekday;

        return $this;
    }

    /**
     * @return LcsPointOpeningsWindows[]|null
     */
    public function getWindows(): ?array
    {
        return $this->windows;
    }

    /**
     * @param LcsPointOpeningsWindows[]|null $windows
     */
    public function setWindows(?array $windows): self
    {
        $this->windows = $windows;

        return $this;
    }
}
