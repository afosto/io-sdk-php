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

class OdrOrderItemReferencesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrOrderItemReferences' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrOrderItemReferences' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrOrderItemReferences();
        if (property_exists($data, 'orders') && null !== $data->{'orders'}) {
            $values = [];
            foreach ($data->{'orders'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrOrderItemReferencesOrder', 'json', $context);
            }
            $object->setOrders($values);
        }
        if (property_exists($data, 'stacks') && null !== $data->{'stacks'}) {
            $values_1 = [];
            foreach ($data->{'stacks'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrStackReference', 'json', $context);
            }
            $object->setStacks($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOrders()) {
            $values = [];
            foreach ($object->getOrders() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'orders'} = $values;
        }
        if (null !== $object->getStacks()) {
            $values_1 = [];
            foreach ($object->getStacks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'stacks'} = $values_1;
        }

        return $data;
    }
}
