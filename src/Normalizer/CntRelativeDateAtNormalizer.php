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

class CntRelativeDateAtNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntRelativeDateAt' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntRelativeDateAt' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntRelativeDateAt();
        if (property_exists($data, 'hour') && null !== $data->{'hour'}) {
            $object->setHour($data->{'hour'});
        }
        if (property_exists($data, 'minute') && null !== $data->{'minute'}) {
            $object->setMinute($data->{'minute'});
        }
        if (property_exists($data, 'day_of_week') && null !== $data->{'day_of_week'}) {
            $object->setDayOfWeek($data->{'day_of_week'});
        }
        if (property_exists($data, 'day_of_month') && null !== $data->{'day_of_month'}) {
            $object->setDayOfMonth($data->{'day_of_month'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getHour()) {
            $data->{'hour'} = $object->getHour();
        }
        if (null !== $object->getMinute()) {
            $data->{'minute'} = $object->getMinute();
        }
        if (null !== $object->getDayOfWeek()) {
            $data->{'day_of_week'} = $object->getDayOfWeek();
        }
        if (null !== $object->getDayOfMonth()) {
            $data->{'day_of_month'} = $object->getDayOfMonth();
        }

        return $data;
    }
}
