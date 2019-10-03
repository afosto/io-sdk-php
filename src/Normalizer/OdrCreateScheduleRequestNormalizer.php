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

class OdrCreateScheduleRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrCreateScheduleRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrCreateScheduleRequest';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrCreateScheduleRequest();
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'last_call') && $data->{'last_call'} !== null) {
            $object->setLastCall($data->{'last_call'});
        }
        if (property_exists($data, 'arrival') && $data->{'arrival'} !== null) {
            $object->setArrival($data->{'arrival'});
        }
        if (property_exists($data, 'duration') && $data->{'duration'} !== null) {
            $object->setDuration($data->{'duration'});
        }
        if (property_exists($data, 'available_weekdays') && $data->{'available_weekdays'} !== null) {
            $values = [];
            foreach ($data->{'available_weekdays'} as $value) {
                $values[] = $value;
            }
            $object->setAvailableWeekdays($values);
        }
        if (property_exists($data, 'only_aplied_on') && $data->{'only_aplied_on'} !== null) {
            $values_1 = [];
            foreach ($data->{'only_aplied_on'} as $value_1) {
                $values_1[] = \DateTime::createFromFormat("Y-m-d\TH:i:sP", $value_1);
            }
            $object->setOnlyApliedOn($values_1);
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
        if (null !== $object->getOnlyApliedOn()) {
            $values_1 = [];
            foreach ($object->getOnlyApliedOn() as $value_1) {
                $values_1[] = $value_1->format("Y-m-d\TH:i:sP");
            }
            $data->{'only_aplied_on'} = $values_1;
        }

        return $data;
    }
}
