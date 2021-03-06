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

class OdrSettingsShippingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrSettingsShipping' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrSettingsShipping' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrSettingsShipping();
        if (property_exists($data, 'address_id') && null !== $data->{'address_id'}) {
            $object->setAddressId($data->{'address_id'});
        }
        if (property_exists($data, 'source_address_id') && null !== $data->{'source_address_id'}) {
            $object->setSourceAddressId($data->{'source_address_id'});
        }
        if (property_exists($data, 'method_id') && null !== $data->{'method_id'}) {
            $object->setMethodId($data->{'method_id'});
        }
        if (property_exists($data, 'spid') && null !== $data->{'spid'}) {
            $object->setSpid($data->{'spid'});
        }
        if (property_exists($data, 'window') && null !== $data->{'window'}) {
            $object->setWindow($this->denormalizer->denormalize($data->{'window'}, 'Afosto\\Sdk\\Model\\OdrSettingsShippingWindow', 'json', $context));
        }
        if (property_exists($data, 'is_split_allowed') && null !== $data->{'is_split_allowed'}) {
            $object->setIsSplitAllowed($data->{'is_split_allowed'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddressId()) {
            $data->{'address_id'} = $object->getAddressId();
        }
        if (null !== $object->getSourceAddressId()) {
            $data->{'source_address_id'} = $object->getSourceAddressId();
        }
        if (null !== $object->getMethodId()) {
            $data->{'method_id'} = $object->getMethodId();
        }
        if (null !== $object->getSpid()) {
            $data->{'spid'} = $object->getSpid();
        }
        if (null !== $object->getWindow()) {
            $data->{'window'} = $this->normalizer->normalize($object->getWindow(), 'json', $context);
        }
        if (null !== $object->getIsSplitAllowed()) {
            $data->{'is_split_allowed'} = $object->getIsSplitAllowed();
        }

        return $data;
    }
}
