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

class LcsShipmentModelAddressingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsShipmentModelAddressing' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsShipmentModelAddressing' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsShipmentModelAddressing();
        if (property_exists($data, 'to') && null !== $data->{'to'}) {
            $object->setTo($this->denormalizer->denormalize($data->{'to'}, 'Afosto\\Sdk\\Model\\LcsShipmentAddressing', 'json', $context));
        }
        if (property_exists($data, 'from') && null !== $data->{'from'}) {
            $object->setFrom($this->denormalizer->denormalize($data->{'from'}, 'Afosto\\Sdk\\Model\\LcsShipmentAddressing', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTo()) {
            $data->{'to'} = $this->normalizer->normalize($object->getTo(), 'json', $context);
        }
        if (null !== $object->getFrom()) {
            $data->{'from'} = $this->normalizer->normalize($object->getFrom(), 'json', $context);
        }

        return $data;
    }
}
