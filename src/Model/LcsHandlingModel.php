<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsHandlingModel
{
    /**
     * @var LcsHandlingModelShipments[]
     */
    protected $shipments;
    /**
     * @var \DateTime
     */
    protected $dueAt;

    /**
     * @return LcsHandlingModelShipments[]|null
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }

    /**
     * @param LcsHandlingModelShipments[]|null $shipments
     */
    public function setShipments(?array $shipments): self
    {
        $this->shipments = $shipments;

        return $this;
    }

    public function getDueAt(): ?\DateTime
    {
        return $this->dueAt;
    }

    public function setDueAt(?\DateTime $dueAt): self
    {
        $this->dueAt = $dueAt;

        return $this;
    }
}
