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

class CatMapsCollectionsIdSearchPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CatMapsCollectionsIdSearchPostResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CatMapsCollectionsIdSearchPostResponse200' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CatMapsCollectionsIdSearchPostResponse200();
        if (property_exists($data, 'hits') && null !== $data->{'hits'}) {
            $object->setHits($data->{'hits'});
        }
        if (property_exists($data, 'misses') && null !== $data->{'misses'}) {
            $values = [];
            foreach ($data->{'misses'} as $value) {
                $values[] = $value;
            }
            $object->setMisses($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getHits()) {
            $data->{'hits'} = $object->getHits();
        }
        if (null !== $object->getMisses()) {
            $values = [];
            foreach ($object->getMisses() as $value) {
                $values[] = $value;
            }
            $data->{'misses'} = $values;
        }

        return $data;
    }
}
