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

class LcsShipmentItemCorrectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsShipmentItemCorrection' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsShipmentItemCorrection' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsShipmentItemCorrection();
        if (property_exists($data, 'sku') && null !== $data->{'sku'}) {
            $object->setSku($data->{'sku'});
        }
        if (property_exists($data, 'quantity') && null !== $data->{'quantity'}) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'description') && null !== $data->{'description'}) {
            $object->setDescription($data->{'description'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }

        return $data;
    }
}
