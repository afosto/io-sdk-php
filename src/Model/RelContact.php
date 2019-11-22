<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelContact
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $email;
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
     * @var RelOrganisationList
     */
    protected $organisations;
    /**
     * @var RelAddressList
     */
    protected $billing;
    /**
     * @var RelAddressList
     */
    protected $shipping;
    /**
     * @var RelPhoneNumberList
     */
    protected $phoneNumbers;
    /**
     * additional metadata that applies to the item.
     *
     * @var string[]
     */
    protected $metadata;
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
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * First name.
     *
     * @return string|null
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * First name.
     *
     * @param string|null $givenName
     *
     * @return self
     */
    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * Patronymic.
     *
     * @return string|null
     */
    public function getAdditionalName(): ?string
    {
        return $this->additionalName;
    }

    /**
     * Patronymic.
     *
     * @param string|null $additionalName
     *
     * @return self
     */
    public function setAdditionalName(?string $additionalName): self
    {
        $this->additionalName = $additionalName;

        return $this;
    }

    /**
     * Last name.
     *
     * @return string|null
     */
    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    /**
     * Last name.
     *
     * @param string|null $familyName
     *
     * @return self
     */
    public function setFamilyName(?string $familyName): self
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * @return RelOrganisationList|null
     */
    public function getOrganisations(): ?RelOrganisationList
    {
        return $this->organisations;
    }

    /**
     * @param RelOrganisationList|null $organisations
     *
     * @return self
     */
    public function setOrganisations(?RelOrganisationList $organisations): self
    {
        $this->organisations = $organisations;

        return $this;
    }

    /**
     * @return RelAddressList|null
     */
    public function getBilling(): ?RelAddressList
    {
        return $this->billing;
    }

    /**
     * @param RelAddressList|null $billing
     *
     * @return self
     */
    public function setBilling(?RelAddressList $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @return RelAddressList|null
     */
    public function getShipping(): ?RelAddressList
    {
        return $this->shipping;
    }

    /**
     * @param RelAddressList|null $shipping
     *
     * @return self
     */
    public function setShipping(?RelAddressList $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @return RelPhoneNumberList|null
     */
    public function getPhoneNumbers(): ?RelPhoneNumberList
    {
        return $this->phoneNumbers;
    }

    /**
     * @param RelPhoneNumberList|null $phoneNumbers
     *
     * @return self
     */
    public function setPhoneNumbers(?RelPhoneNumberList $phoneNumbers): self
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
     *
     * @return self
     */
    public function setMetadata(?\ArrayObject $metadata): self
    {
        $this->metadata = $metadata;

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
