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

class OdrReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrReference' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrReference' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrReference();
        if (property_exists($data, 'entity_id') && null !== $data->{'entity_id'}) {
            $object->setEntityId($data->{'entity_id'});
        }
        if (property_exists($data, 'entity_type') && null !== $data->{'entity_type'}) {
            $object->setEntityType($data->{'entity_type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEntityId()) {
            $data->{'entity_id'} = $object->getEntityId();
        }
        if (null !== $object->getEntityType()) {
            $data->{'entity_type'} = $object->getEntityType();
        }

        return $data;
    }
}