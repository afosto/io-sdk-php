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

class OdrSettingsBillingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrSettingsBilling' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrSettingsBilling' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrSettingsBilling();
        if (property_exists($data, 'address_id') && null !== $data->{'address_id'}) {
            $object->setAddressId($data->{'address_id'});
        }
        if (property_exists($data, 'method_code') && null !== $data->{'method_code'}) {
            $object->setMethodCode($data->{'method_code'});
        }
        if (property_exists($data, 'issuer_code') && null !== $data->{'issuer_code'}) {
            $object->setIssuerCode($data->{'issuer_code'});
        }
        if (property_exists($data, 'provider_code') && null !== $data->{'provider_code'}) {
            $object->setProviderCode($data->{'provider_code'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddressId()) {
            $data->{'address_id'} = $object->getAddressId();
        }
        if (null !== $object->getMethodCode()) {
            $data->{'method_code'} = $object->getMethodCode();
        }
        if (null !== $object->getIssuerCode()) {
            $data->{'issuer_code'} = $object->getIssuerCode();
        }
        if (null !== $object->getProviderCode()) {
            $data->{'provider_code'} = $object->getProviderCode();
        }

        return $data;
    }
}
