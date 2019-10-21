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

class OdrAddressModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrAddressModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrAddressModel';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrAddressModel();
        if (property_exists($data, 'country') && $data->{'country'} !== null) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'administrative_area') && $data->{'administrative_area'} !== null) {
            $object->setAdministrativeArea($data->{'administrative_area'});
        }
        if (property_exists($data, 'locality') && $data->{'locality'} !== null) {
            $object->setLocality($data->{'locality'});
        }
        if (property_exists($data, 'dependent_locality') && $data->{'dependent_locality'} !== null) {
            $object->setDependentLocality($data->{'dependent_locality'});
        }
        if (property_exists($data, 'postal_code') && $data->{'postal_code'} !== null) {
            $object->setPostalCode($data->{'postal_code'});
        }
        if (property_exists($data, 'sorting_code') && $data->{'sorting_code'} !== null) {
            $object->setSortingCode($data->{'sorting_code'});
        }
        if (property_exists($data, 'address_line_1') && $data->{'address_line_1'} !== null) {
            $object->setAddressLine1($data->{'address_line_1'});
        }
        if (property_exists($data, 'address_line_2') && $data->{'address_line_2'} !== null) {
            $object->setAddressLine2($data->{'address_line_2'});
        }
        if (property_exists($data, 'thoroughfare') && $data->{'thoroughfare'} !== null) {
            $object->setThoroughfare($data->{'thoroughfare'});
        }
        if (property_exists($data, 'premise_number') && $data->{'premise_number'} !== null) {
            $object->setPremiseNumber($data->{'premise_number'});
        }
        if (property_exists($data, 'premise_number_suffix') && $data->{'premise_number_suffix'} !== null) {
            $object->setPremiseNumberSuffix($data->{'premise_number_suffix'});
        }
        if (property_exists($data, 'organisation') && $data->{'organisation'} !== null) {
            $object->setOrganisation($data->{'organisation'});
        }
        if (property_exists($data, 'given_name') && $data->{'given_name'} !== null) {
            $object->setGivenName($data->{'given_name'});
        }
        if (property_exists($data, 'additional_name') && $data->{'additional_name'} !== null) {
            $object->setAdditionalName($data->{'additional_name'});
        }
        if (property_exists($data, 'family_name') && $data->{'family_name'} !== null) {
            $object->setFamilyName($data->{'family_name'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getAdministrativeArea()) {
            $data->{'administrative_area'} = $object->getAdministrativeArea();
        }
        if (null !== $object->getLocality()) {
            $data->{'locality'} = $object->getLocality();
        }
        if (null !== $object->getDependentLocality()) {
            $data->{'dependent_locality'} = $object->getDependentLocality();
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postal_code'} = $object->getPostalCode();
        }
        if (null !== $object->getSortingCode()) {
            $data->{'sorting_code'} = $object->getSortingCode();
        }
        if (null !== $object->getAddressLine1()) {
            $data->{'address_line_1'} = $object->getAddressLine1();
        }
        if (null !== $object->getAddressLine2()) {
            $data->{'address_line_2'} = $object->getAddressLine2();
        }
        if (null !== $object->getThoroughfare()) {
            $data->{'thoroughfare'} = $object->getThoroughfare();
        }
        if (null !== $object->getPremiseNumber()) {
            $data->{'premise_number'} = $object->getPremiseNumber();
        }
        if (null !== $object->getPremiseNumberSuffix()) {
            $data->{'premise_number_suffix'} = $object->getPremiseNumberSuffix();
        }
        if (null !== $object->getOrganisation()) {
            $data->{'organisation'} = $object->getOrganisation();
        }
        if (null !== $object->getGivenName()) {
            $data->{'given_name'} = $object->getGivenName();
        }
        if (null !== $object->getAdditionalName()) {
            $data->{'additional_name'} = $object->getAdditionalName();
        }
        if (null !== $object->getFamilyName()) {
            $data->{'family_name'} = $object->getFamilyName();
        }

        return $data;
    }
}
