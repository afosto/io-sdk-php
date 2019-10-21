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

class OdrOrganisationModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrOrganisationModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrOrganisationModel';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrOrganisationModel();
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'registrations') && $data->{'registrations'} !== null) {
            $values = [];
            foreach ($data->{'registrations'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrVatRegistrationModel', 'json', $context);
            }
            $object->setRegistrations($values);
        }
        if (property_exists($data, 'address') && $data->{'address'} !== null) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Afosto\\Sdk\\Model\\OdrAddressModel', 'json', $context));
        }
        if (property_exists($data, 'coc_number') && $data->{'coc_number'} !== null) {
            $object->setCocNumber($data->{'coc_number'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRegistrations()) {
            $values = [];
            foreach ($object->getRegistrations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'registrations'} = $values;
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getCocNumber()) {
            $data->{'coc_number'} = $object->getCocNumber();
        }

        return $data;
    }
}
