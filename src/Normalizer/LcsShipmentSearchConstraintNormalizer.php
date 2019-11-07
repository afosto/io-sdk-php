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

class LcsShipmentSearchConstraintNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\LcsShipmentSearchConstraint';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\LcsShipmentSearchConstraint';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsShipmentSearchConstraint();
        if (property_exists($data, 'key') && $data->{'key'} !== null) {
            $object->setKey($data->{'key'});
        }
        if (property_exists($data, 'operator') && $data->{'operator'} !== null) {
            $object->setOperator($data->{'operator'});
        }
        if (property_exists($data, 'value') && $data->{'value'} !== null) {
            $values = [];
            foreach ($data->{'value'} as $value) {
                $values[] = $value;
            }
            $object->setValue($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getKey()) {
            $data->{'key'} = $object->getKey();
        }
        if (null !== $object->getOperator()) {
            $data->{'operator'} = $object->getOperator();
        }
        if (null !== $object->getValue()) {
            $values = [];
            foreach ($object->getValue() as $value) {
                $values[] = $value;
            }
            $data->{'value'} = $values;
        }

        return $data;
    }
}
