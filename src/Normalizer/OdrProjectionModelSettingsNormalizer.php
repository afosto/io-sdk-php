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

class OdrProjectionModelSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrProjectionModelSettings' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrProjectionModelSettings' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrProjectionModelSettings();
        if (property_exists($data, 'billing') && null !== $data->{'billing'}) {
            $object->setBilling($this->denormalizer->denormalize($data->{'billing'}, 'Afosto\\Sdk\\Model\\OdrProjectionModelSettingsBilling', 'json', $context));
        }
        if (property_exists($data, 'shipping') && null !== $data->{'shipping'}) {
            $object->setShipping($this->denormalizer->denormalize($data->{'shipping'}, 'Afosto\\Sdk\\Model\\OdrProjectionModelSettingsShipping', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBilling()) {
            $data->{'billing'} = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        if (null !== $object->getShipping()) {
            $data->{'shipping'} = $this->normalizer->normalize($object->getShipping(), 'json', $context);
        }

        return $data;
    }
}
