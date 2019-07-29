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

class SplAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\SplAddress';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\SplAddress';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\SplAddress();
        if (property_exists($data, 'is_default') && $data->{'is_default'} !== null) {
            $object->setIsDefault($data->{'is_default'});
        }
        if (property_exists($data, 'street_1') && $data->{'street_1'} !== null) {
            $object->setStreet1($data->{'street_1'});
        }
        if (property_exists($data, 'street_2') && $data->{'street_2'} !== null) {
            $object->setStreet2($data->{'street_2'});
        }
        if (property_exists($data, 'house_number') && $data->{'house_number'} !== null) {
            $object->setHouseNumber($data->{'house_number'});
        }
        if (property_exists($data, 'postal_code') && $data->{'postal_code'} !== null) {
            $object->setPostalCode($data->{'postal_code'});
        }
        if (property_exists($data, 'city') && $data->{'city'} !== null) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'country_iso') && $data->{'country_iso'} !== null) {
            $object->setCountryIso($data->{'country_iso'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsDefault()) {
            $data->{'is_default'} = $object->getIsDefault();
        }
        if (null !== $object->getStreet1()) {
            $data->{'street_1'} = $object->getStreet1();
        }
        if (null !== $object->getStreet2()) {
            $data->{'street_2'} = $object->getStreet2();
        }
        if (null !== $object->getHouseNumber()) {
            $data->{'house_number'} = $object->getHouseNumber();
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postal_code'} = $object->getPostalCode();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getCountryIso()) {
            $data->{'country_iso'} = $object->getCountryIso();
        }

        return $data;
    }
}
