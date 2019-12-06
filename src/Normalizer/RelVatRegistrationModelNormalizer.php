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

class RelVatRegistrationModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelVatRegistrationModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelVatRegistrationModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\RelVatRegistrationModel();
        if (property_exists($data, 'country_code') && null !== $data->{'country_code'}) {
            $object->setCountryCode($data->{'country_code'});
        }
        if (property_exists($data, 'number') && null !== $data->{'number'}) {
            $object->setNumber($data->{'number'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCountryCode()) {
            $data->{'country_code'} = $object->getCountryCode();
        }
        if (null !== $object->getNumber()) {
            $data->{'number'} = $object->getNumber();
        }

        return $data;
    }
}
