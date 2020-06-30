<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntRelativeDateAt
{
    /**
     * @var string
     */
    protected $hour;
    /**
     * @var string
     */
    protected $minute;
    /**
     * @var string
     */
    protected $dayOfWeek;
    /**
     * @var string
     */
    protected $dayOfMonth;

    public function getHour(): ?string
    {
        return $this->hour;
    }

    public function setHour(?string $hour): self
    {
        $this->hour = $hour;

        return $this;
    }

    public function getMinute(): ?string
    {
        return $this->minute;
    }

    public function setMinute(?string $minute): self
    {
        $this->minute = $minute;

        return $this;
    }

    public function getDayOfWeek(): ?string
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek(?string $dayOfWeek): self
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    public function getDayOfMonth(): ?string
    {
        return $this->dayOfMonth;
    }

    public function setDayOfMonth(?string $dayOfMonth): self
    {
        $this->dayOfMonth = $dayOfMonth;

        return $this;
    }
}
