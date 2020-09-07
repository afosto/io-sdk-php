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

class SplStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\SplStatus' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\SplStatus' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\SplStatus();
        if (property_exists($data, 'status') && null !== $data->{'status'}) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'changed_at') && null !== $data->{'changed_at'}) {
            $object->setChangedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'changed_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getChangedAt()) {
            $data->{'changed_at'} = $object->getChangedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
