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

class OdrStackStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrStackState' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrStackState' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrStackState();
        if (property_exists($data, 'is_locked') && null !== $data->{'is_locked'}) {
            $object->setIsLocked($data->{'is_locked'});
        }
        if (property_exists($data, 'is_accepted') && null !== $data->{'is_accepted'}) {
            $object->setIsAccepted($data->{'is_accepted'});
        }
        if (property_exists($data, 'is_confirmed') && null !== $data->{'is_confirmed'}) {
            $object->setIsConfirmed($data->{'is_confirmed'});
        }
        if (property_exists($data, 'is_finished') && null !== $data->{'is_finished'}) {
            $object->setIsFinished($data->{'is_finished'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsLocked()) {
            $data->{'is_locked'} = $object->getIsLocked();
        }
        if (null !== $object->getIsAccepted()) {
            $data->{'is_accepted'} = $object->getIsAccepted();
        }
        if (null !== $object->getIsConfirmed()) {
            $data->{'is_confirmed'} = $object->getIsConfirmed();
        }
        if (null !== $object->getIsFinished()) {
            $data->{'is_finished'} = $object->getIsFinished();
        }

        return $data;
    }
}
