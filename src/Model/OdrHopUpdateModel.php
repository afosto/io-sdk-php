<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrHopUpdateModel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var OdrSchedule[]
     */
    protected $schedule;

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
     * @return OdrSchedule[]|null
     */
    public function getSchedule(): ?array
    {
        return $this->schedule;
    }

    /**
     * @param OdrSchedule[]|null $schedule
     *
     * @return self
     */
    public function setSchedule(?array $schedule): self
    {
        $this->schedule = $schedule;

        return $this;
    }
}
