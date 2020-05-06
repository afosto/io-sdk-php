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

class LcsPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsPoint' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\LcsPoint' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsPoint();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'carrier') && null !== $data->{'carrier'}) {
            $object->setCarrier($data->{'carrier'});
        }
        if (property_exists($data, 'latitude') && null !== $data->{'latitude'}) {
            $object->setLatitude($data->{'latitude'});
        }
        if (property_exists($data, 'longitude') && null !== $data->{'longitude'}) {
            $object->setLongitude($data->{'longitude'});
        }
        if (property_exists($data, 'address') && null !== $data->{'address'}) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Afosto\\Sdk\\Model\\LcsAddress', 'json', $context));
        }
        if (property_exists($data, 'openings') && null !== $data->{'openings'}) {
            $values = [];
            foreach ($data->{'openings'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\LcsPointOpeningsItem', 'json', $context);
            }
            $object->setOpenings($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getCarrier()) {
            $data->{'carrier'} = $object->getCarrier();
        }
        if (null !== $object->getLatitude()) {
            $data->{'latitude'} = $object->getLatitude();
        }
        if (null !== $object->getLongitude()) {
            $data->{'longitude'} = $object->getLongitude();
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getOpenings()) {
            $values = [];
            foreach ($object->getOpenings() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'openings'} = $values;
        }

        return $data;
    }
}
