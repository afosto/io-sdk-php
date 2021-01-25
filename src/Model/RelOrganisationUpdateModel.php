<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelOrganisationUpdateModel
{
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
     * @var RelVatRegistrationModel[]
     */
    protected $registrations;
    /**
     * @var RelOrganisationPaymentSettings
     */
    protected $paymentSettings;
    /**
     * @var RelOrganisationUpdateModelBilling
     */
    protected $billing;
    /**
     * @var RelOrganisationUpdateModelShipping
     */
    protected $shipping;
    /**
     * @var RelOrganisationUpdateModelPhoneNumbers
     */
    protected $phoneNumbers;
    /**
     * @var RelOrganisationUpdateModelAdministration
     */
    protected $administration;

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
     * @return RelVatRegistrationModel[]|null
     */
    public function getRegistrations(): ?array
    {
        return $this->registrations;
    }

    /**
     * @param RelVatRegistrationModel[]|null $registrations
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

    public function getBilling(): ?RelOrganisationUpdateModelBilling
    {
        return $this->billing;
    }

    public function setBilling(?RelOrganisationUpdateModelBilling $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    public function getShipping(): ?RelOrganisationUpdateModelShipping
    {
        return $this->shipping;
    }

    public function setShipping(?RelOrganisationUpdateModelShipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    public function getPhoneNumbers(): ?RelOrganisationUpdateModelPhoneNumbers
    {
        return $this->phoneNumbers;
    }

    public function setPhoneNumbers(?RelOrganisationUpdateModelPhoneNumbers $phoneNumbers): self
    {
        $this->phoneNumbers = $phoneNumbers;

        return $this;
    }

    public function getAdministration(): ?RelOrganisationUpdateModelAdministration
    {
        return $this->administration;
    }

    public function setAdministration(?RelOrganisationUpdateModelAdministration $administration): self
    {
        $this->administration = $administration;

        return $this;
    }
}
