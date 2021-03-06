<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntDataflowFlowsIdTriggerPostBody
{
    /**
     * @var string
     */
    protected $entityId;
    /**
     * @var \DateTime
     */
    protected $clockAt;

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEntityId(?string $entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }

    public function getClockAt(): ?\DateTime
    {
        return $this->clockAt;
    }

    public function setClockAt(?\DateTime $clockAt): self
    {
        $this->clockAt = $clockAt;

        return $this;
    }
}
