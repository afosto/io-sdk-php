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

class OdrOrderStepNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrOrderStep' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrOrderStep' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrOrderStep();
        if (property_exists($data, 'code') && null !== $data->{'code'}) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'order') && null !== $data->{'order'}) {
            $object->setOrder($data->{'order'});
        }
        if (property_exists($data, 'is_reversible') && null !== $data->{'is_reversible'}) {
            $object->setIsReversible($data->{'is_reversible'});
        }
        if (property_exists($data, 'trigger') && null !== $data->{'trigger'}) {
            $object->setTrigger($data->{'trigger'});
        }
        if (property_exists($data, 'actions') && null !== $data->{'actions'}) {
            $values = [];
            foreach ($data->{'actions'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrStepAction', 'json', $context);
            }
            $object->setActions($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getOrder()) {
            $data->{'order'} = $object->getOrder();
        }
        if (null !== $object->getIsReversible()) {
            $data->{'is_reversible'} = $object->getIsReversible();
        }
        if (null !== $object->getTrigger()) {
            $data->{'trigger'} = $object->getTrigger();
        }
        if (null !== $object->getActions()) {
            $values = [];
            foreach ($object->getActions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'actions'} = $values;
        }

        return $data;
    }
}
