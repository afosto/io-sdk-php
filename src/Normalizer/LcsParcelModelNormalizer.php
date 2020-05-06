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

class LcsParcelModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsParcelModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\LcsParcelModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsParcelModel();
        if (property_exists($data, 'weight') && null !== $data->{'weight'}) {
            $object->setWeight($data->{'weight'});
        }
        if (property_exists($data, 'length') && null !== $data->{'length'}) {
            $object->setLength($data->{'length'});
        }
        if (property_exists($data, 'width') && null !== $data->{'width'}) {
            $object->setWidth($data->{'width'});
        }
        if (property_exists($data, 'height') && null !== $data->{'height'}) {
            $object->setHeight($data->{'height'});
        }
        if (property_exists($data, 'tracking_code') && null !== $data->{'tracking_code'}) {
            $object->setTrackingCode($data->{'tracking_code'});
        }
        if (property_exists($data, 'tracking_url') && null !== $data->{'tracking_url'}) {
            $object->setTrackingUrl($data->{'tracking_url'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getWeight()) {
            $data->{'weight'} = $object->getWeight();
        }
        if (null !== $object->getLength()) {
            $data->{'length'} = $object->getLength();
        }
        if (null !== $object->getWidth()) {
            $data->{'width'} = $object->getWidth();
        }
        if (null !== $object->getHeight()) {
            $data->{'height'} = $object->getHeight();
        }
        if (null !== $object->getTrackingCode()) {
            $data->{'tracking_code'} = $object->getTrackingCode();
        }
        if (null !== $object->getTrackingUrl()) {
            $data->{'tracking_url'} = $object->getTrackingUrl();
        }

        return $data;
    }
}
