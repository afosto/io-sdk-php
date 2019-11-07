<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsShipmentDetailsAddressing
{
    /**
     * @var LcsShipmentDetailsAddressingTo
     */
    protected $to;
    /**
     * @var LcsShipmentDetailsAddressingFrom
     */
    protected $from;

    /**
     * @return LcsShipmentDetailsAddressingTo|null
     */
    public function getTo(): ?LcsShipmentDetailsAddressingTo
    {
        return $this->to;
    }

    /**
     * @param LcsShipmentDetailsAddressingTo|null $to
     *
     * @return self
     */
    public function setTo(?LcsShipmentDetailsAddressingTo $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return LcsShipmentDetailsAddressingFrom|null
     */
    public function getFrom(): ?LcsShipmentDetailsAddressingFrom
    {
        return $this->from;
    }

    /**
     * @param LcsShipmentDetailsAddressingFrom|null $from
     *
     * @return self
     */
    public function setFrom(?LcsShipmentDetailsAddressingFrom $from): self
    {
        $this->from = $from;

        return $this;
    }
}
