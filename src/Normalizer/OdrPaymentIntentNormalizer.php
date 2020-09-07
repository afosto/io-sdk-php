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

class OdrPaymentIntentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrPaymentIntent' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrPaymentIntent' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrPaymentIntent();
        if (property_exists($data, 'amount') && null !== $data->{'amount'}) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'provider_code') && null !== $data->{'provider_code'}) {
            $object->setProviderCode($data->{'provider_code'});
        }
        if (property_exists($data, 'method_code') && null !== $data->{'method_code'}) {
            $object->setMethodCode($data->{'method_code'});
        }
        if (property_exists($data, 'issuer_code') && null !== $data->{'issuer_code'}) {
            $object->setIssuerCode($data->{'issuer_code'});
        }
        if (property_exists($data, 'metadata') && null !== $data->{'metadata'}) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'return_url') && null !== $data->{'return_url'}) {
            $object->setReturnUrl($data->{'return_url'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getProviderCode()) {
            $data->{'provider_code'} = $object->getProviderCode();
        }
        if (null !== $object->getMethodCode()) {
            $data->{'method_code'} = $object->getMethodCode();
        }
        if (null !== $object->getIssuerCode()) {
            $data->{'issuer_code'} = $object->getIssuerCode();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getReturnUrl()) {
            $data->{'return_url'} = $object->getReturnUrl();
        }

        return $data;
    }
}
