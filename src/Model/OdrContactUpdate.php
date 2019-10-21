<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrContactUpdate
{
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
     * @var OdrContactUpdateOrganisations
     */
    protected $organisations;
    /**
     * @var OdrContactUpdateBilling
     */
    protected $billing;
    /**
     * @var OdrContactUpdateShipping
     */
    protected $shipping;
    /**
     * @var OdrContactUpdatePhoneNumbers
     */
    protected $phoneNumbers;

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
     * @return OdrContactUpdateOrganisations|null
     */
    public function getOrganisations(): ?OdrContactUpdateOrganisations
    {
        return $this->organisations;
    }

    /**
     * @param OdrContactUpdateOrganisations|null $organisations
     *
     * @return self
     */
    public function setOrganisations(?OdrContactUpdateOrganisations $organisations): self
    {
        $this->organisations = $organisations;

        return $this;
    }

    /**
     * @return OdrContactUpdateBilling|null
     */
    public function getBilling(): ?OdrContactUpdateBilling
    {
        return $this->billing;
    }

    /**
     * @param OdrContactUpdateBilling|null $billing
     *
     * @return self
     */
    public function setBilling(?OdrContactUpdateBilling $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @return OdrContactUpdateShipping|null
     */
    public function getShipping(): ?OdrContactUpdateShipping
    {
        return $this->shipping;
    }

    /**
     * @param OdrContactUpdateShipping|null $shipping
     *
     * @return self
     */
    public function setShipping(?OdrContactUpdateShipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @return OdrContactUpdatePhoneNumbers|null
     */
    public function getPhoneNumbers(): ?OdrContactUpdatePhoneNumbers
    {
        return $this->phoneNumbers;
    }

    /**
     * @param OdrContactUpdatePhoneNumbers|null $phoneNumbers
     *
     * @return self
     */
    public function setPhoneNumbers(?OdrContactUpdatePhoneNumbers $phoneNumbers): self
    {
        $this->phoneNumbers = $phoneNumbers;

        return $this;
    }
}
