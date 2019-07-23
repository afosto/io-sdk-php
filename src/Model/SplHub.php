<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class SplHub
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $uuid;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var SplProperty[]
     */
    protected $properties;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var \DateTime
     */
    protected $statusUpdatedAt;
    /**
     * @var \DateTime
     */
    protected $disabledAt = 'null';
    /**
     * @var SplPubnub
     */
    protected $pubnub;
    /**
     * @var SplIntegration
     */
    protected $integration;
    /**
     * @var string
     */
    protected $osFileId;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

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
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @param string|null $uuid
     *
     * @return self
     */
    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;

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
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return SplProperty[]|null
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * @param SplProperty[]|null $properties
     *
     * @return self
     */
    public function setProperties(?array $properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getStatusUpdatedAt(): ?\DateTime
    {
        return $this->statusUpdatedAt;
    }

    /**
     * @param \DateTime|null $statusUpdatedAt
     *
     * @return self
     */
    public function setStatusUpdatedAt(?\DateTime $statusUpdatedAt): self
    {
        $this->statusUpdatedAt = $statusUpdatedAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDisabledAt(): ?\DateTime
    {
        return $this->disabledAt;
    }

    /**
     * @param \DateTime|null $disabledAt
     *
     * @return self
     */
    public function setDisabledAt(?\DateTime $disabledAt): self
    {
        $this->disabledAt = $disabledAt;

        return $this;
    }

    /**
     * @return SplPubnub|null
     */
    public function getPubnub(): ?SplPubnub
    {
        return $this->pubnub;
    }

    /**
     * @param SplPubnub|null $pubnub
     *
     * @return self
     */
    public function setPubnub(?SplPubnub $pubnub): self
    {
        $this->pubnub = $pubnub;

        return $this;
    }

    /**
     * @return SplIntegration|null
     */
    public function getIntegration(): ?SplIntegration
    {
        return $this->integration;
    }

    /**
     * @param SplIntegration|null $integration
     *
     * @return self
     */
    public function setIntegration(?SplIntegration $integration): self
    {
        $this->integration = $integration;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOsFileId(): ?string
    {
        return $this->osFileId;
    }

    /**
     * @param string|null $osFileId
     *
     * @return self
     */
    public function setOsFileId(?string $osFileId): self
    {
        $this->osFileId = $osFileId;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
