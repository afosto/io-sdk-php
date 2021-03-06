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

class WmsCreateHopRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\WmsCreateHopRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\WmsCreateHopRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsCreateHopRequest();
        if (property_exists($data, 'from') && null !== $data->{'from'}) {
            $object->setFrom($data->{'from'});
        }
        if (property_exists($data, 'to') && null !== $data->{'to'}) {
            $object->setTo($data->{'to'});
        }
        if (property_exists($data, 'schedules') && null !== $data->{'schedules'}) {
            $values = [];
            foreach ($data->{'schedules'} as $value) {
                $values[] = $value;
            }
            $object->setSchedules($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFrom()) {
            $data->{'from'} = $object->getFrom();
        }
        if (null !== $object->getTo()) {
            $data->{'to'} = $object->getTo();
        }
        if (null !== $object->getSchedules()) {
            $values = [];
            foreach ($object->getSchedules() as $value) {
                $values[] = $value;
            }
            $data->{'schedules'} = $values;
        }

        return $data;
    }
}
