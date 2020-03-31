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

class OdrGetSessionResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrGetSessionResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrGetSessionResponse' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrGetSessionResponse();
        if (property_exists($data, 'expires_at') && null !== $data->{'expires_at'}) {
            $object->setExpiresAt($data->{'expires_at'});
        }
        if (property_exists($data, 'contact') && null !== $data->{'contact'}) {
            $object->setContact($this->denormalizer->denormalize($data->{'contact'}, 'Afosto\\Sdk\\Model\\OdrContact', 'json', $context));
        }
        if (property_exists($data, 'billing_address') && null !== $data->{'billing_address'}) {
            $object->setBillingAddress($this->denormalizer->denormalize($data->{'billing_address'}, 'Afosto\\Sdk\\Model\\OdrAddress', 'json', $context));
        }
        if (property_exists($data, 'shipping_address') && null !== $data->{'shipping_address'}) {
            $object->setShippingAddress($this->denormalizer->denormalize($data->{'shipping_address'}, 'Afosto\\Sdk\\Model\\OdrAddress', 'json', $context));
        }
        if (property_exists($data, 'window') && null !== $data->{'window'}) {
            $object->setWindow($this->denormalizer->denormalize($data->{'window'}, 'Afosto\\Sdk\\Model\\OdrGetSessionDeliveryWindow', 'json', $context));
        }
        if (property_exists($data, 'spid') && null !== $data->{'spid'}) {
            $object->setSpid($data->{'spid'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getExpiresAt()) {
            $data->{'expires_at'} = $object->getExpiresAt();
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if (null !== $object->getBillingAddress()) {
            $data->{'billing_address'} = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        if (null !== $object->getShippingAddress()) {
            $data->{'shipping_address'} = $this->normalizer->normalize($object->getShippingAddress(), 'json', $context);
        }
        if (null !== $object->getWindow()) {
            $data->{'window'} = $this->normalizer->normalize($object->getWindow(), 'json', $context);
        }
        if (null !== $object->getSpid()) {
            $data->{'spid'} = $object->getSpid();
        }

        return $data;
    }
}