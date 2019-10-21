<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrContactModel
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
     * @var OdrContactModelOrganisation
     */
    protected $organisation;
    /**
     * @var OdrContactModelBilling
     */
    protected $billing;
    /**
     * @var OdrContactModelShipping
     */
    protected $shipping;
    /**
     * @var OdrContactModelPhoneNumber
     */
    protected $phoneNumber;

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
     * @return OdrContactModelOrganisation|null
     */
    public function getOrganisation(): ?OdrContactModelOrganisation
    {
        return $this->organisation;
    }

    /**
     * @param OdrContactModelOrganisation|null $organisation
     *
     * @return self
     */
    public function setOrganisation(?OdrContactModelOrganisation $organisation): self
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * @return OdrContactModelBilling|null
     */
    public function getBilling(): ?OdrContactModelBilling
    {
        return $this->billing;
    }

    /**
     * @param OdrContactModelBilling|null $billing
     *
     * @return self
     */
    public function setBilling(?OdrContactModelBilling $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @return OdrContactModelShipping|null
     */
    public function getShipping(): ?OdrContactModelShipping
    {
        return $this->shipping;
    }

    /**
     * @param OdrContactModelShipping|null $shipping
     *
     * @return self
     */
    public function setShipping(?OdrContactModelShipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @return OdrContactModelPhoneNumber|null
     */
    public function getPhoneNumber(): ?OdrContactModelPhoneNumber
    {
        return $this->phoneNumber;
    }

    /**
     * @param OdrContactModelPhoneNumber|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?OdrContactModelPhoneNumber $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
