<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrAddress
{
    /**
     * @var string
     */
    protected $id;
    /**
     * Two letter counpremise_numbertry code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The state or province name or abbreviation (optional).
     *
     * @var string
     */
    protected $administrativeArea;
    /**
     * City.
     *
     * @var string
     */
    protected $locality;
    /**
     * Additional information about the locality (optional).
     *
     * @var string
     */
    protected $dependentLocality;
    /**
     * The complete postal code for the delivery point.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Allow sorting, for example to route mail (optional).
     *
     * @var string
     */
    protected $sortingCode;
    /**
     * The first address line.
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * The second address line (optional).
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * @var string
     */
    protected $thoroughfare;
    /**
     * @var int
     */
    protected $premiseNumber;
    /**
     * @var string
     */
    protected $premiseNumberSuffix;
    /**
     * The name of the recipient, firm, or company at this address (optional).
     *
     * @var string
     */
    protected $organisation;
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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Two letter counpremise_numbertry code.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Two letter counpremise_numbertry code.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * The state or province name or abbreviation (optional).
     */
    public function getAdministrativeArea(): ?string
    {
        return $this->administrativeArea;
    }

    /**
     * The state or province name or abbreviation (optional).
     */
    public function setAdministrativeArea(?string $administrativeArea): self
    {
        $this->administrativeArea = $administrativeArea;

        return $this;
    }

    /**
     * City.
     */
    public function getLocality(): ?string
    {
        return $this->locality;
    }

    /**
     * City.
     */
    public function setLocality(?string $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Additional information about the locality (optional).
     */
    public function getDependentLocality(): ?string
    {
        return $this->dependentLocality;
    }

    /**
     * Additional information about the locality (optional).
     */
    public function setDependentLocality(?string $dependentLocality): self
    {
        $this->dependentLocality = $dependentLocality;

        return $this;
    }

    /**
     * The complete postal code for the delivery point.
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * The complete postal code for the delivery point.
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Allow sorting, for example to route mail (optional).
     */
    public function getSortingCode(): ?string
    {
        return $this->sortingCode;
    }

    /**
     * Allow sorting, for example to route mail (optional).
     */
    public function setSortingCode(?string $sortingCode): self
    {
        $this->sortingCode = $sortingCode;

        return $this;
    }

    /**
     * The first address line.
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * The first address line.
     */
    public function setAddressLine1(?string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * The second address line (optional).
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * The second address line (optional).
     */
    public function setAddressLine2(?string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    public function getThoroughfare(): ?string
    {
        return $this->thoroughfare;
    }

    public function setThoroughfare(?string $thoroughfare): self
    {
        $this->thoroughfare = $thoroughfare;

        return $this;
    }

    public function getPremiseNumber(): ?int
    {
        return $this->premiseNumber;
    }

    public function setPremiseNumber(?int $premiseNumber): self
    {
        $this->premiseNumber = $premiseNumber;

        return $this;
    }

    public function getPremiseNumberSuffix(): ?string
    {
        return $this->premiseNumberSuffix;
    }

    public function setPremiseNumberSuffix(?string $premiseNumberSuffix): self
    {
        $this->premiseNumberSuffix = $premiseNumberSuffix;

        return $this;
    }

    /**
     * The name of the recipient, firm, or company at this address (optional).
     */
    public function getOrganisation(): ?string
    {
        return $this->organisation;
    }

    /**
     * The name of the recipient, firm, or company at this address (optional).
     */
    public function setOrganisation(?string $organisation): self
    {
        $this->organisation = $organisation;

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
}