<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsSchedule
{
    /**
     * @var string
     */
    protected $id;
    /**
     * UTC timestamp.
     *
     * @var string
     */
    protected $lastCall;
    /**
     * UTC timestamp.
     *
     * @var string
     */
    protected $arrival;
    /**
     * @var int
     */
    protected $duration;
    /**
     * A Weekday specifies a day of the week (Sunday = 0, ...).
     *
     * @var int[]
     */
    protected $availableWeekdays;
    /**
     * @var string[]
     */
    protected $activeAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * UTC timestamp.
     */
    public function getLastCall(): ?string
    {
        return $this->lastCall;
    }

    /**
     * UTC timestamp.
     */
    public function setLastCall(?string $lastCall): self
    {
        $this->lastCall = $lastCall;

        return $this;
    }

    /**
     * UTC timestamp.
     */
    public function getArrival(): ?string
    {
        return $this->arrival;
    }

    /**
     * UTC timestamp.
     */
    public function setArrival(?string $arrival): self
    {
        $this->arrival = $arrival;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * A Weekday specifies a day of the week (Sunday = 0, ...).
     *
     * @return int[]|null
     */
    public function getAvailableWeekdays(): ?array
    {
        return $this->availableWeekdays;
    }

    /**
     * A Weekday specifies a day of the week (Sunday = 0, ...).
     *
     * @param int[]|null $availableWeekdays
     */
    public function setAvailableWeekdays(?array $availableWeekdays): self
    {
        $this->availableWeekdays = $availableWeekdays;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getActiveAt(): ?array
    {
        return $this->activeAt;
    }

    /**
     * @param string[]|null $activeAt
     */
    public function setActiveAt(?array $activeAt): self
    {
        $this->activeAt = $activeAt;

        return $this;
    }
}
