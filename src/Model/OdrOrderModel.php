<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrOrderModel
{
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var string
     */
    protected $contactId;
    /**
     * @var bool
     */
    protected $isConfirmed;
    /**
     * @var string
     */
    protected $stack;
    /**
     * @var string
     */
    protected $addressId;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var \DateTime
     */
    protected $dueAt;

    /**
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     *
     * @return self
     */
    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * @param string|null $contactId
     *
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsConfirmed(): ?bool
    {
        return $this->isConfirmed;
    }

    /**
     * @param bool|null $isConfirmed
     *
     * @return self
     */
    public function setIsConfirmed(?bool $isConfirmed): self
    {
        $this->isConfirmed = $isConfirmed;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStack(): ?string
    {
        return $this->stack;
    }

    /**
     * @param string|null $stack
     *
     * @return self
     */
    public function setStack(?string $stack): self
    {
        $this->stack = $stack;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressId(): ?string
    {
        return $this->addressId;
    }

    /**
     * @param string|null $addressId
     *
     * @return self
     */
    public function setAddressId(?string $addressId): self
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDueAt(): ?\DateTime
    {
        return $this->dueAt;
    }

    /**
     * @param \DateTime|null $dueAt
     *
     * @return self
     */
    public function setDueAt(?\DateTime $dueAt): self
    {
        $this->dueAt = $dueAt;

        return $this;
    }
}
