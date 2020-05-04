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

class CntColumnErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntColumnError' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntColumnError' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntColumnError();
        if (property_exists($data, 'column') && null !== $data->{'column'}) {
            $object->setColumn($data->{'column'});
        }
        if (property_exists($data, 'level') && null !== $data->{'level'}) {
            $object->setLevel($data->{'level'});
        }
        if (property_exists($data, 'message') && null !== $data->{'message'}) {
            $object->setMessage($data->{'message'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getColumn()) {
            $data->{'column'} = $object->getColumn();
        }
        if (null !== $object->getLevel()) {
            $data->{'level'} = $object->getLevel();
        }
        if (null !== $object->getMessage()) {
            $data->{'message'} = $object->getMessage();
        }

        return $data;
    }
}
