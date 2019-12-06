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

class PkrShipmentAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\PkrShipmentAddress' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\PkrShipmentAddress' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\PkrShipmentAddress();
        if (property_exists($data, 'city') && null !== $data->{'city'}) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'company') && null !== $data->{'company'}) {
            $object->setCompany($data->{'company'});
        }
        if (property_exists($data, 'country') && null !== $data->{'country'}) {
            $object->setCountry($this->denormalizer->denormalize($data->{'country'}, 'Afosto\\Sdk\\Model\\PkrShipmentAddressCountry', 'json', $context));
        }
        if (property_exists($data, 'house_number') && null !== $data->{'house_number'}) {
            $object->setHouseNumber($data->{'house_number'});
        }
        if (property_exists($data, 'house_number_suffix') && null !== $data->{'house_number_suffix'}) {
            $object->setHouseNumberSuffix($data->{'house_number_suffix'});
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'region') && null !== $data->{'region'}) {
            $object->setRegion($data->{'region'});
        }
        if (property_exists($data, 'street') && null !== $data->{'street'}) {
            $object->setStreet($data->{'street'});
        }
        if (property_exists($data, 'zip_code') && null !== $data->{'zip_code'}) {
            $object->setZipCode($data->{'zip_code'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $object->getCompany();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $this->normalizer->normalize($object->getCountry(), 'json', $context);
        }
        if (null !== $object->getHouseNumber()) {
            $data->{'house_number'} = $object->getHouseNumber();
        }
        if (null !== $object->getHouseNumberSuffix()) {
            $data->{'house_number_suffix'} = $object->getHouseNumberSuffix();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRegion()) {
            $data->{'region'} = $object->getRegion();
        }
        if (null !== $object->getStreet()) {
            $data->{'street'} = $object->getStreet();
        }
        if (null !== $object->getZipCode()) {
            $data->{'zip_code'} = $object->getZipCode();
        }

        return $data;
    }
}
