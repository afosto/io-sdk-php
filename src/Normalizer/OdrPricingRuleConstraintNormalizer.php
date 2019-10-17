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

class OdrPricingRuleConstraintNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrPricingRuleConstraint';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrPricingRuleConstraint';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrPricingRuleConstraint();
        if (property_exists($data, 'key') && $data->{'key'} !== null) {
            $object->setKey($data->{'key'});
        }
        if (property_exists($data, 'operator') && $data->{'operator'} !== null) {
            $object->setOperator($data->{'operator'});
        }
        if (property_exists($data, 'values') && $data->{'values'} !== null) {
            $values = [];
            foreach ($data->{'values'} as $value) {
                $values[] = $value;
            }
            $object->setValues($values);
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
        if (null !== $object->getValues()) {
            $values = [];
            foreach ($object->getValues() as $value) {
                $values[] = $value;
            }
            $data->{'values'} = $values;
        }

        return $data;
    }
}
