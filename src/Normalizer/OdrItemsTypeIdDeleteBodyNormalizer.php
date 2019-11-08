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

class OdrItemsTypeIdDeleteBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrItemsTypeIdDeleteBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrItemsTypeIdDeleteBody';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrItemsTypeIdDeleteBody();
        if (property_exists($data, 'stack_item_ids') && $data->{'stack_item_ids'} !== null) {
            $values = [];
            foreach ($data->{'stack_item_ids'} as $value) {
                $values[] = $value;
            }
            $object->setStackItemIds($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getStackItemIds()) {
            $values = [];
            foreach ($object->getStackItemIds() as $value) {
                $values[] = $value;
            }
            $data->{'stack_item_ids'} = $values;
        }

        return $data;
    }
}