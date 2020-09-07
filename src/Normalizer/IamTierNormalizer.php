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

class IamTierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\IamTier' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\IamTier' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\IamTier();
        if (property_exists($data, 'up_to') && null !== $data->{'up_to'}) {
            $object->setUpTo($data->{'up_to'});
        }
        if (property_exists($data, 'flat_amount') && null !== $data->{'flat_amount'}) {
            $object->setFlatAmount($data->{'flat_amount'});
        }
        if (property_exists($data, 'unit_amount') && null !== $data->{'unit_amount'}) {
            $object->setUnitAmount($data->{'unit_amount'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getUpTo()) {
            $data->{'up_to'} = $object->getUpTo();
        }
        if (null !== $object->getFlatAmount()) {
            $data->{'flat_amount'} = $object->getFlatAmount();
        }
        if (null !== $object->getUnitAmount()) {
            $data->{'unit_amount'} = $object->getUnitAmount();
        }

        return $data;
    }
}
