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

class MesSubscriptionModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\MesSubscriptionModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\MesSubscriptionModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\MesSubscriptionModel();
        if (property_exists($data, 'events') && null !== $data->{'events'}) {
            $values = [];
            foreach ($data->{'events'} as $value) {
                $values[] = $value;
            }
            $object->setEvents($values);
        }
        if (property_exists($data, 'endpoint') && null !== $data->{'endpoint'}) {
            $object->setEndpoint($data->{'endpoint'});
        }
        if (property_exists($data, 'delivery_rate') && null !== $data->{'delivery_rate'}) {
            $object->setDeliveryRate($data->{'delivery_rate'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEvents()) {
            $values = [];
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data->{'events'} = $values;
        }
        if (null !== $object->getEndpoint()) {
            $data->{'endpoint'} = $object->getEndpoint();
        }
        if (null !== $object->getDeliveryRate()) {
            $data->{'delivery_rate'} = $object->getDeliveryRate();
        }

        return $data;
    }
}
