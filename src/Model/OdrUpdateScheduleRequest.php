<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrUpdateScheduleRequest
{
    /**
     * @var string
     */
    protected $id;
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
    protected $onlyApliedOn;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * UTC timestamp.
     *
     * @return string|null
     */
    public function getLastCall(): ?string
    {
        return $this->lastCall;
    }

    /**
     * UTC timestamp.
     *
     * @param string|null $lastCall
     *
     * @return self
     */
    public function setLastCall(?string $lastCall): self
    {
        $this->lastCall = $lastCall;

        return $this;
    }

    /**
     * UTC timestamp.
     *
     * @return string|null
     */
    public function getArrival(): ?string
    {
        return $this->arrival;
    }

    /**
     * UTC timestamp.
     *
     * @param string|null $arrival
     *
     * @return self
     */
    public function setArrival(?string $arrival): self
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     *
     * @return self
     */
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
     *
     * @return self
     */
    public function setAvailableWeekdays(?array $availableWeekdays): self
    {
        $this->availableWeekdays = $availableWeekdays;

        return $this;
    }

    /**
     * @return \DateTime[]|null
     */
    public function getOnlyApliedOn(): ?array
    {
        return $this->onlyApliedOn;
    }

    /**
     * @param \DateTime[]|null $onlyApliedOn
     *
     * @return self
     */
    public function setOnlyApliedOn(?array $onlyApliedOn): self
    {
        $this->onlyApliedOn = $onlyApliedOn;

        return $this;
    }
}
