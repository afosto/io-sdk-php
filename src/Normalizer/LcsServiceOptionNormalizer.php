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

class LcsServiceOptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\LcsServiceOption';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\LcsServiceOption';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsServiceOption();
        if (property_exists($data, 'option') && $data->{'option'} !== null) {
            $object->setOption($data->{'option'});
        }
        if (property_exists($data, 'configuration') && $data->{'configuration'} !== null) {
            $values = [];
            foreach ($data->{'configuration'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\LcsServiceOptionConfigurationItem', 'json', $context);
            }
            $object->setConfiguration($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOption()) {
            $data->{'option'} = $object->getOption();
        }
        if (null !== $object->getConfiguration()) {
            $values = [];
            foreach ($object->getConfiguration() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'configuration'} = $values;
        }

        return $data;
    }
}