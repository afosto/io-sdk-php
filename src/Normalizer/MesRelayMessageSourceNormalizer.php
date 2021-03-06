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

class MesRelayMessageSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\MesRelayMessageSource' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\MesRelayMessageSource' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\MesRelayMessageSource();
        if (property_exists($data, 'ip') && null !== $data->{'ip'}) {
            $object->setIp($data->{'ip'});
        }
        if (property_exists($data, 'city') && null !== $data->{'city'}) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'country_code') && null !== $data->{'country_code'}) {
            $object->setCountryCode($data->{'country_code'});
        }
        if (property_exists($data, 'user_agent') && null !== $data->{'user_agent'}) {
            $object->setUserAgent($data->{'user_agent'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIp()) {
            $data->{'ip'} = $object->getIp();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getCountryCode()) {
            $data->{'country_code'} = $object->getCountryCode();
        }
        if (null !== $object->getUserAgent()) {
            $data->{'user_agent'} = $object->getUserAgent();
        }

        return $data;
    }
}
