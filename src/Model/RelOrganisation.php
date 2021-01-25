<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelOrganisation
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
     * The name of the recipient, firm, or company at this address (optional).
     *
     * @var string
     */
    protected $name;
    /**
     * The file_id ( logo ) of the organisation.
     *
     * @var string
     */
    protected $fileId;
    /**
     * @var string
     */
    protected $cocNumber;
    /**
     * @var string
     */
    protected $accountManager;
    /**
     * @var RelOrganisationAdministration
     */
    protected $administration;
    /**
     * @var string[]
     */
    protected $tags;
    /**
     * additional metadata that applies to the item.
     *
     * @var string[]
     */
    protected $metadata;
    /**
     * @var RelVatRegistration[]
     */
    protected $registrations;
    /**
     * @var RelOrganisationPaymentSettings
     */
    protected $paymentSettings;
    /**
     * @var RelPhoneNumberList
     */
    protected $phoneNumbers;
    /**
     * @var RelAddressList
     */
    protected $billing;
    /**
     * @var RelAddressList
     */
    protected $shipping;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * The name of the recipient, firm, or company at this address (optional).
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the recipient, firm, or company at this address (optional).
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The file_id ( logo ) of the organisation.
     */
    public function getFileId(): ?string
    {
        return $this->fileId;
    }

    /**
     * The file_id ( logo ) of the organisation.
     */
    public function setFileId(?string $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    public function getCocNumber(): ?string
    {
        return $this->cocNumber;
    }

    public function setCocNumber(?string $cocNumber): self
    {
        $this->cocNumber = $cocNumber;

        return $this;
    }

    public function getAccountManager(): ?string
    {
        return $this->accountManager;
    }

    public function setAccountManager(?string $accountManager): self
    {
        $this->accountManager = $accountManager;

        return $this;
    }

    public function getAdministration(): ?RelOrganisationAdministration
    {
        return $this->administration;
    }

    public function setAdministration(?RelOrganisationAdministration $administration): self
    {
        $this->administration = $administration;

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

    /**
     * @return RelVatRegistration[]|null
     */
    public function getRegistrations(): ?array
    {
        return $this->registrations;
    }

    /**
     * @param RelVatRegistration[]|null $registrations
     */
    public function setRegistrations(?array $registrations): self
    {
        $this->registrations = $registrations;

        return $this;
    }

    public function getPaymentSettings(): ?RelOrganisationPaymentSettings
    {
        return $this->paymentSettings;
    }

    public function setPaymentSettings(?RelOrganisationPaymentSettings $paymentSettings): self
    {
        $this->paymentSettings = $paymentSettings;

        return $this;
    }

    public function getPhoneNumbers(): ?RelPhoneNumberList
    {
        return $this->phoneNumbers;
    }

    public function setPhoneNumbers(?RelPhoneNumberList $phoneNumbers): self
    {
        $this->phoneNumbers = $phoneNumbers;

        return $this;
    }

    public function getBilling(): ?RelAddressList
    {
        return $this->billing;
    }

    public function setBilling(?RelAddressList $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    public function getShipping(): ?RelAddressList
    {
        return $this->shipping;
    }

    public function setShipping(?RelAddressList $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }
}
