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

class WmsProjectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\WmsProjection';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\WmsProjection';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsProjection();
        if (property_exists($data, 'routes') && $data->{'routes'} !== null) {
            $values = [];
            foreach ($data->{'routes'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\WmsAvailableRoute', 'json', $context);
            }
            $object->setRoutes($values);
        }
        if (property_exists($data, 'available') && $data->{'available'} !== null) {
            $values_1 = [];
            foreach ($data->{'available'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\WmsAvailableProjectionItem', 'json', $context);
            }
            $object->setAvailable($values_1);
        }
        if (property_exists($data, 'unavailable') && $data->{'unavailable'} !== null) {
            $values_2 = [];
            foreach ($data->{'unavailable'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Afosto\\Sdk\\Model\\WmsUnavailableProjectionItem', 'json', $context);
            }
            $object->setUnavailable($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRoutes()) {
            $values = [];
            foreach ($object->getRoutes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'routes'} = $values;
        }
        if (null !== $object->getAvailable()) {
            $values_1 = [];
            foreach ($object->getAvailable() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'available'} = $values_1;
        }
        if (null !== $object->getUnavailable()) {
            $values_2 = [];
            foreach ($object->getUnavailable() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'unavailable'} = $values_2;
        }

        return $data;
    }
}