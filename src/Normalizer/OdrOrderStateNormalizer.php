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

class OdrOrderStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrOrderState' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrOrderState' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrOrderState();
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
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'flow') && null !== $data->{'flow'}) {
            $values = [];
            foreach ($data->{'flow'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrOrderStep', 'json', $context);
            }
            $object->setFlow($values);
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
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getFlow()) {
            $values = [];
            foreach ($object->getFlow() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'flow'} = $values;
        }

        return $data;
    }
}
