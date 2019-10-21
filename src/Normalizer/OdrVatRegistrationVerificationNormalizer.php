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

class OdrVatRegistrationVerificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrVatRegistrationVerification';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrVatRegistrationVerification';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrVatRegistrationVerification();
        if (property_exists($data, 'is_pending') && $data->{'is_pending'} !== null) {
            $object->setIsPending($data->{'is_pending'});
        }
        if (property_exists($data, 'is_valid') && $data->{'is_valid'} !== null) {
            $object->setIsValid($data->{'is_valid'});
        }
        if (property_exists($data, 'country') && $data->{'country'} !== null) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'metadata') && $data->{'metadata'} !== null) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'verified_at') && $data->{'verified_at'} !== null) {
            $object->setVerifiedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'verified_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsPending()) {
            $data->{'is_pending'} = $object->getIsPending();
        }
        if (null !== $object->getIsValid()) {
            $data->{'is_valid'} = $object->getIsValid();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getVerifiedAt()) {
            $data->{'verified_at'} = $object->getVerifiedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
