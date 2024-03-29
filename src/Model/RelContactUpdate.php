<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelContactUpdate
{
    /**
     * @var string
     */
    protected $email;
    /**
     * @var bool
     */
    protected $isGuest = false;
    /**
     * @var string
     */
    protected $audience = 'default';
    /**
     * @var string[]
     */
    protected $tags;
    /**
     * First name.
     *
     * @var string
     */
    protected $givenName;
    /**
     * Patronymic.
     *
     * @var string
     */
    protected $additionalName;
    /**
     * Last name.
     *
     * @var string
     */
    protected $familyName;
    /**
     * @var RelContactUpdateOrganisations
     */
    protected $organisations;
    /**
     * @var RelContactUpdateBilling
     */
    protected $billing;
    /**
     * @var RelContactUpdateShipping
     */
    protected $shipping;
    /**
     * @var RelContactUpdatePhoneNumbers
     */
    protected $phoneNumbers;
    /**
     * additional metadata that applies to the item.
     *
     * @var string[]
     */
    protected $metadata;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getIsGuest(): ?bool
    {
        return $this->isGuest;
    }

    public function setIsGuest(?bool $isGuest): self
    {
        $this->isGuest = $isGuest;

        return $this;
    }

    public function getAudience(): ?string
    {
        return $this->audience;
    }

    public function setAudience(?string $audience): self
    {
        $this->audience = $audience;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[]|null $tags
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * First name.
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * First name.
     */
    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * Patronymic.
     */
    public function getAdditionalName(): ?string
    {
        return $this->additionalName;
    }

    /**
     * Patronymic.
     */
    public function setAdditionalName(?string $additionalName): self
    {
        $this->additionalName = $additionalName;

        return $this;
    }

    /**
     * Last name.
     */
    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    /**
     * Last name.
     */
    public function setFamilyName(?string $familyName): self
    {
        $this->familyName = $familyName;

        return $this;
    }

    public function getOrganisations(): ?RelContactUpdateOrganisations
    {
        return $this->organisations;
    }

    public function setOrganisations(?RelContactUpdateOrganisations $organisations): self
    {
        $this->organisations = $organisations;

        return $this;
    }

    public function getBilling(): ?RelContactUpdateBilling
    {
        return $this->billing;
    }

    public function setBilling(?RelContactUpdateBilling $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    public function getShipping(): ?RelContactUpdateShipping
    {
        return $this->shipping;
    }

    public function setShipping(?RelContactUpdateShipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    public function getPhoneNumbers(): ?RelContactUpdatePhoneNumbers
    {
        return $this->phoneNumbers;
    }

    public function setPhoneNumbers(?RelContactUpdatePhoneNumbers $phoneNumbers): self
    {
        $this->phoneNumbers = $phoneNumbers;

        return $this;
    }

    /**
     * additional metadata that applies to the item.
     *
     * @return string[]|null
     */
    public function getMetadata(): ?\ArrayObject
    {
        return $this->metadata;
    }

    /**
     * additional metadata that applies to the item.
     *
     * @param string[]|null $metadata
     */
    public function setMetadata(?\ArrayObject $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }
}
