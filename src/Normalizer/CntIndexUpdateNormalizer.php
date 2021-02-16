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

class CntIndexUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntIndexUpdate' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntIndexUpdate' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntIndexUpdate();
        if (property_exists($data, 'status') && null !== $data->{'status'}) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'updateId') && null !== $data->{'updateId'}) {
            $object->setUpdateId($data->{'updateId'});
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($this->denormalizer->denormalize($data->{'type'}, 'Afosto\\Sdk\\Model\\CntIndexUpdateType', 'json', $context));
        }
        if (property_exists($data, 'duration') && null !== $data->{'duration'}) {
            $object->setDuration($data->{'duration'});
        }
        if (property_exists($data, 'enqueuedAt') && null !== $data->{'enqueuedAt'}) {
            $object->setEnqueuedAt($data->{'enqueuedAt'});
        }
        if (property_exists($data, 'processedAt') && null !== $data->{'processedAt'}) {
            $object->setProcessedAt($data->{'processedAt'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getUpdateId()) {
            $data->{'updateId'} = $object->getUpdateId();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $this->normalizer->normalize($object->getType(), 'json', $context);
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $object->getDuration();
        }
        if (null !== $object->getEnqueuedAt()) {
            $data->{'enqueuedAt'} = $object->getEnqueuedAt();
        }
        if (null !== $object->getProcessedAt()) {
            $data->{'processedAt'} = $object->getProcessedAt();
        }

        return $data;
    }
}
