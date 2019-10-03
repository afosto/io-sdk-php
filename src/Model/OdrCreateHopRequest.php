<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrCreateHopRequest
{
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
    protected $schedules;

    /**
     * Location id.
     *
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Location id.
     *
     * @param string|null $from
     *
     * @return self
     */
    public function setFrom(?string $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Location id.
     *
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * Location id.
     *
     * @param string|null $to
     *
     * @return self
     */
    public function setTo(?string $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getSchedules(): ?array
    {
        return $this->schedules;
    }

    /**
     * @param string[]|null $schedules
     *
     * @return self
     */
    public function setSchedules(?array $schedules): self
    {
        $this->schedules = $schedules;

        return $this;
    }
}
