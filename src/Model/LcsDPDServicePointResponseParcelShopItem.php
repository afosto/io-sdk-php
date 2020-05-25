<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsDPDServicePointResponseParcelShopItem
{
    /**
     * @var float
     */
    protected $parcelShopId;
    /**
     * @var string
     */
    protected $pudoId;
    /**
     * @var string
     */
    protected $company;
    /**
     * @var string
     */
    protected $street;
    /**
     * @var string
     */
    protected $houseNo;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var float
     */
    protected $countryNum;
    /**
     * @var string
     */
    protected $zipCode;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $town;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var string
     */
    protected $fax;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $homepage;
    /**
     * @var float
     */
    protected $latitude;
    /**
     * @var float
     */
    protected $longitude;
    /**
     * @var float
     */
    protected $coordinateX;
    /**
     * @var float
     */
    protected $coordinateY;
    /**
     * @var float
     */
    protected $coordinateZ;
    /**
     * @var float
     */
    protected $distance;
    /**
     * @var string
     */
    protected $expressPickupTime;
    /**
     * @var string
     */
    protected $extraInfo;
    /**
     * @var LcsDPDServicePointResponseParcelShopItemOpeningHoursItem[]
     */
    protected $openingHours;
    /**
     * @var LcsDPDServicePointResponseParcelShopItemServices
     */
    protected $services;

    public function getParcelShopId(): ?float
    {
        return $this->parcelShopId;
    }

    public function setParcelShopId(?float $parcelShopId): self
    {
        $this->parcelShopId = $parcelShopId;

        return $this;
    }

    public function getPudoId(): ?string
    {
        return $this->pudoId;
    }

    public function setPudoId(?string $pudoId): self
    {
        $this->pudoId = $pudoId;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getHouseNo(): ?string
    {
        return $this->houseNo;
    }

    public function setHouseNo(?string $houseNo): self
    {
        $this->houseNo = $houseNo;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCountryNum(): ?float
    {
        return $this->countryNum;
    }

    public function setCountryNum(?float $countryNum): self
    {
        $this->countryNum = $countryNum;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(?string $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    public function setHomepage(?string $homepage): self
    {
        $this->homepage = $homepage;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getCoordinateX(): ?float
    {
        return $this->coordinateX;
    }

    public function setCoordinateX(?float $coordinateX): self
    {
        $this->coordinateX = $coordinateX;

        return $this;
    }

    public function getCoordinateY(): ?float
    {
        return $this->coordinateY;
    }

    public function setCoordinateY(?float $coordinateY): self
    {
        $this->coordinateY = $coordinateY;

        return $this;
    }

    public function getCoordinateZ(): ?float
    {
        return $this->coordinateZ;
    }

    public function setCoordinateZ(?float $coordinateZ): self
    {
        $this->coordinateZ = $coordinateZ;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getExpressPickupTime(): ?string
    {
        return $this->expressPickupTime;
    }

    public function setExpressPickupTime(?string $expressPickupTime): self
    {
        $this->expressPickupTime = $expressPickupTime;

        return $this;
    }

    public function getExtraInfo(): ?string
    {
        return $this->extraInfo;
    }

    public function setExtraInfo(?string $extraInfo): self
    {
        $this->extraInfo = $extraInfo;

        return $this;
    }

    /**
     * @return LcsDPDServicePointResponseParcelShopItemOpeningHoursItem[]|null
     */
    public function getOpeningHours(): ?array
    {
        return $this->openingHours;
    }

    /**
     * @param LcsDPDServicePointResponseParcelShopItemOpeningHoursItem[]|null $openingHours
     */
    public function setOpeningHours(?array $openingHours): self
    {
        $this->openingHours = $openingHours;

        return $this;
    }

    public function getServices(): ?LcsDPDServicePointResponseParcelShopItemServices
    {
        return $this->services;
    }

    public function setServices(?LcsDPDServicePointResponseParcelShopItemServices $services): self
    {
        $this->services = $services;

        return $this;
    }
}
