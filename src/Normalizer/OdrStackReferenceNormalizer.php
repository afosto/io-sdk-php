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

class OdrStackReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrStackReference' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrStackReference' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrStackReference();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'state') && null !== $data->{'state'}) {
            $object->setState($this->denormalizer->denormalize($data->{'state'}, 'Afosto\\Sdk\\Model\\OdrStackReferenceState', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $this->normalizer->normalize($object->getState(), 'json', $context);
        }

        return $data;
    }
}
