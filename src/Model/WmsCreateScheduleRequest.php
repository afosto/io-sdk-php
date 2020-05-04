<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class WmsCreateScheduleRequest
{
    /**
     * @var string
     */
    protected $name;
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
     * As noted in ISO 8601 weekdays start at monday.
     *
     * @var int[]
     */
    protected $availableWeekdays;
    /**
     * @var \DateTime[]
     */
    protected $activeAt;

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
     * As noted in ISO 8601 weekdays start at monday.
     *
     * @return int[]|null
     */
    public function getAvailableWeekdays(): ?array
    {
        return $this->availableWeekdays;
    }

    /**
     * As noted in ISO 8601 weekdays start at monday.
     *
     * @param int[]|null $availableWeekdays
     */
    public function setAvailableWeekdays(?array $availableWeekdays): self
    {
        $this->availableWeekdays = $availableWeekdays;

        return $this;
    }

    /**
     * @return \DateTime[]|null
     */
    public function getActiveAt(): ?array
    {
        return $this->activeAt;
    }

    /**
     * @param \DateTime[]|null $activeAt
     */
    public function setActiveAt(?array $activeAt): self
    {
        $this->activeAt = $activeAt;

        return $this;
    }
}
