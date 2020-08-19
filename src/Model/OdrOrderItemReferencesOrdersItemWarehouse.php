<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrOrderItemReferencesOrdersItemWarehouse
{
    /**
     * @var \DateTime
     */
    protected $claimedAt;
    /**
     * @var string
     */
    protected $claimId;
    /**
     * @var string
     */
    protected $claimItemId;
    /**
     * @var string
     */
    protected $routeId;
    /**
     * @var bool
     */
    protected $isReservation = false;
    /**
     * @var string
     */
    protected $transferId;

    public function getClaimedAt(): ?\DateTime
    {
        return $this->claimedAt;
    }

    public function setClaimedAt(?\DateTime $claimedAt): self
    {
        $this->claimedAt = $claimedAt;

        return $this;
    }

    public function getClaimId(): ?string
    {
        return $this->claimId;
    }

    public function setClaimId(?string $claimId): self
    {
        $this->claimId = $claimId;

        return $this;
    }

    public function getClaimItemId(): ?string
    {
        return $this->claimItemId;
    }

    public function setClaimItemId(?string $claimItemId): self
    {
        $this->claimItemId = $claimItemId;

        return $this;
    }

    public function getRouteId(): ?string
    {
        return $this->routeId;
    }

    public function setRouteId(?string $routeId): self
    {
        $this->routeId = $routeId;

        return $this;
    }

    public function getIsReservation(): ?bool
    {
        return $this->isReservation;
    }

    public function setIsReservation(?bool $isReservation): self
    {
        $this->isReservation = $isReservation;

        return $this;
    }

    public function getTransferId(): ?string
    {
        return $this->transferId;
    }

    public function setTransferId(?string $transferId): self
    {
        $this->transferId = $transferId;

        return $this;
    }
}
