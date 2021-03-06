<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsShipmentUpdateModel
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $methodId;
    /**
     * @var LcsShipmentUpdateModelAddressing
     */
    protected $addressing;
    /**
     * @var string[]
     */
    protected $priorShipments;
    /**
     * @var \DateTime
     */
    protected $expectedAt;
    /**
     * @var \DateTime
     */
    protected $shipAt;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMethodId(): ?string
    {
        return $this->methodId;
    }

    public function setMethodId(?string $methodId): self
    {
        $this->methodId = $methodId;

        return $this;
    }

    public function getAddressing(): ?LcsShipmentUpdateModelAddressing
    {
        return $this->addressing;
    }

    public function setAddressing(?LcsShipmentUpdateModelAddressing $addressing): self
    {
        $this->addressing = $addressing;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPriorShipments(): ?array
    {
        return $this->priorShipments;
    }

    /**
     * @param string[]|null $priorShipments
     */
    public function setPriorShipments(?array $priorShipments): self
    {
        $this->priorShipments = $priorShipments;

        return $this;
    }

    public function getExpectedAt(): ?\DateTime
    {
        return $this->expectedAt;
    }

    public function setExpectedAt(?\DateTime $expectedAt): self
    {
        $this->expectedAt = $expectedAt;

        return $this;
    }

    public function getShipAt(): ?\DateTime
    {
        return $this->shipAt;
    }

    public function setShipAt(?\DateTime $shipAt): self
    {
        $this->shipAt = $shipAt;

        return $this;
    }
}
