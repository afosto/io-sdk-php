<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LcsDPDServicePointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsDPDServicePoint' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\LcsDPDServicePoint' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsDPDServicePoint();
        if (property_exists($data, 'parcelShopId') && null !== $data->{'parcelShopId'}) {
            $object->setParcelShopId($data->{'parcelShopId'});
        }
        if (property_exists($data, 'pudoId') && null !== $data->{'pudoId'}) {
            $object->setPudoId($data->{'pudoId'});
        }
        if (property_exists($data, 'company') && null !== $data->{'company'}) {
            $object->setCompany($data->{'company'});
        }
        if (property_exists($data, 'street') && null !== $data->{'street'}) {
            $object->setStreet($data->{'street'});
        }
        if (property_exists($data, 'houseNo') && null !== $data->{'houseNo'}) {
            $object->setHouseNo($data->{'houseNo'});
        }
        if (property_exists($data, 'country') && null !== $data->{'country'}) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'countryNum') && null !== $data->{'countryNum'}) {
            $object->setCountryNum($data->{'countryNum'});
        }
        if (property_exists($data, 'zipCode') && null !== $data->{'zipCode'}) {
            $object->setZipCode($data->{'zipCode'});
        }
        if (property_exists($data, 'city') && null !== $data->{'city'}) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'town') && null !== $data->{'town'}) {
            $object->setTown($data->{'town'});
        }
        if (property_exists($data, 'phone') && null !== $data->{'phone'}) {
            $object->setPhone($data->{'phone'});
        }
        if (property_exists($data, 'fax') && null !== $data->{'fax'}) {
            $object->setFax($data->{'fax'});
        }
        if (property_exists($data, 'email') && null !== $data->{'email'}) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'homepage') && null !== $data->{'homepage'}) {
            $object->setHomepage($data->{'homepage'});
        }
        if (property_exists($data, 'latitude') && null !== $data->{'latitude'}) {
            $object->setLatitude($data->{'latitude'});
        }
        if (property_exists($data, 'longitude') && null !== $data->{'longitude'}) {
            $object->setLongitude($data->{'longitude'});
        }
        if (property_exists($data, 'coordinateX') && null !== $data->{'coordinateX'}) {
            $object->setCoordinateX($data->{'coordinateX'});
        }
        if (property_exists($data, 'coordinateY') && null !== $data->{'coordinateY'}) {
            $object->setCoordinateY($data->{'coordinateY'});
        }
        if (property_exists($data, 'coordinateZ') && null !== $data->{'coordinateZ'}) {
            $object->setCoordinateZ($data->{'coordinateZ'});
        }
        if (property_exists($data, 'distance') && null !== $data->{'distance'}) {
            $object->setDistance($data->{'distance'});
        }
        if (property_exists($data, 'expressPickupTime') && null !== $data->{'expressPickupTime'}) {
            $object->setExpressPickupTime($data->{'expressPickupTime'});
        }
        if (property_exists($data, 'extraInfo') && null !== $data->{'extraInfo'}) {
            $object->setExtraInfo($data->{'extraInfo'});
        }
        if (property_exists($data, 'openingHours') && null !== $data->{'openingHours'}) {
            $values = [];
            foreach ($data->{'openingHours'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\LcsDPDServicePointOpeningHoursItem', 'json', $context);
            }
            $object->setOpeningHours($values);
        }
        if (property_exists($data, 'services') && null !== $data->{'services'}) {
            $values_1 = [];
            foreach ($data->{'services'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setServices($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getParcelShopId()) {
            $data->{'parcelShopId'} = $object->getParcelShopId();
        }
        if (null !== $object->getPudoId()) {
            $data->{'pudoId'} = $object->getPudoId();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $object->getCompany();
        }
        if (null !== $object->getStreet()) {
            $data->{'street'} = $object->getStreet();
        }
        if (null !== $object->getHouseNo()) {
            $data->{'houseNo'} = $object->getHouseNo();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getCountryNum()) {
            $data->{'countryNum'} = $object->getCountryNum();
        }
        if (null !== $object->getZipCode()) {
            $data->{'zipCode'} = $object->getZipCode();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getTown()) {
            $data->{'town'} = $object->getTown();
        }
        if (null !== $object->getPhone()) {
            $data->{'phone'} = $object->getPhone();
        }
        if (null !== $object->getFax()) {
            $data->{'fax'} = $object->getFax();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getHomepage()) {
            $data->{'homepage'} = $object->getHomepage();
        }
        if (null !== $object->getLatitude()) {
            $data->{'latitude'} = $object->getLatitude();
        }
        if (null !== $object->getLongitude()) {
            $data->{'longitude'} = $object->getLongitude();
        }
        if (null !== $object->getCoordinateX()) {
            $data->{'coordinateX'} = $object->getCoordinateX();
        }
        if (null !== $object->getCoordinateY()) {
            $data->{'coordinateY'} = $object->getCoordinateY();
        }
        if (null !== $object->getCoordinateZ()) {
            $data->{'coordinateZ'} = $object->getCoordinateZ();
        }
        if (null !== $object->getDistance()) {
            $data->{'distance'} = $object->getDistance();
        }
        if (null !== $object->getExpressPickupTime()) {
            $data->{'expressPickupTime'} = $object->getExpressPickupTime();
        }
        if (null !== $object->getExtraInfo()) {
            $data->{'extraInfo'} = $object->getExtraInfo();
        }
        if (null !== $object->getOpeningHours()) {
            $values = [];
            foreach ($object->getOpeningHours() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'openingHours'} = $values;
        }
        if (null !== $object->getServices()) {
            $values_1 = [];
            foreach ($object->getServices() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'services'} = $values_1;
        }

        return $data;
    }
}
