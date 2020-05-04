<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrOrder
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var OdrOrderState
     */
    protected $state;
    /**
     * @var OdrOrderSettings
     */
    protected $settings;
    /**
     * @var OdrProcessing
     */
    protected $processing;
    /**
     * @var OdrOrderCalculationsItem[]
     */
    protected $calculations;
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getState(): ?OdrOrderState
    {
        return $this->state;
    }

    public function setState(?OdrOrderState $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getSettings(): ?OdrOrderSettings
    {
        return $this->settings;
    }

    public function setSettings(?OdrOrderSettings $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function getProcessing(): ?OdrProcessing
    {
        return $this->processing;
    }

    public function setProcessing(?OdrProcessing $processing): self
    {
        $this->processing = $processing;

        return $this;
    }

    /**
     * @return OdrOrderCalculationsItem[]|null
     */
    public function getCalculations(): ?array
    {
        return $this->calculations;
    }

    /**
     * @param OdrOrderCalculationsItem[]|null $calculations
     */
    public function setCalculations(?array $calculations): self
    {
        $this->calculations = $calculations;

        return $this;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
