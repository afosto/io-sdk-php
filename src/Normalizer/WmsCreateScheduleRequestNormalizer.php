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

class WmsCreateScheduleRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\WmsCreateScheduleRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\WmsCreateScheduleRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsCreateScheduleRequest();
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'last_call') && null !== $data->{'last_call'}) {
            $object->setLastCall($data->{'last_call'});
        }
        if (property_exists($data, 'arrival') && null !== $data->{'arrival'}) {
            $object->setArrival($data->{'arrival'});
        }
        if (property_exists($data, 'duration') && null !== $data->{'duration'}) {
            $object->setDuration($data->{'duration'});
        }
        if (property_exists($data, 'available_weekdays') && null !== $data->{'available_weekdays'}) {
            $values = [];
            foreach ($data->{'available_weekdays'} as $value) {
                $values[] = $value;
            }
            $object->setAvailableWeekdays($values);
        }
        if (property_exists($data, 'active_at') && null !== $data->{'active_at'}) {
            $values_1 = [];
            foreach ($data->{'active_at'} as $value_1) {
                $values_1[] = \DateTime::createFromFormat("Y-m-d\TH:i:sP", $value_1);
            }
            $object->setActiveAt($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getLastCall()) {
            $data->{'last_call'} = $object->getLastCall();
        }
        if (null !== $object->getArrival()) {
            $data->{'arrival'} = $object->getArrival();
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $object->getDuration();
        }
        if (null !== $object->getAvailableWeekdays()) {
            $values = [];
            foreach ($object->getAvailableWeekdays() as $value) {
                $values[] = $value;
            }
            $data->{'available_weekdays'} = $values;
        }
        if (null !== $object->getActiveAt()) {
            $values_1 = [];
            foreach ($object->getActiveAt() as $value_1) {
                $values_1[] = $value_1->format("Y-m-d\TH:i:sP");
            }
            $data->{'active_at'} = $values_1;
        }

        return $data;
    }
}
