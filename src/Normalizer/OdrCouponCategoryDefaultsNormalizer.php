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

class OdrCouponCategoryDefaultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrCouponCategoryDefaults' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrCouponCategoryDefaults' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrCouponCategoryDefaults();
        if (property_exists($data, 'expires_after') && null !== $data->{'expires_after'}) {
            $object->setExpiresAfter($data->{'expires_after'});
        }
        if (property_exists($data, 'usage') && null !== $data->{'usage'}) {
            $object->setUsage($this->denormalizer->denormalize($data->{'usage'}, 'Afosto\\Sdk\\Model\\OdrCouponCategoryDefaultsUsage', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getExpiresAfter()) {
            $data->{'expires_after'} = $object->getExpiresAfter();
        }
        if (null !== $object->getUsage()) {
            $data->{'usage'} = $this->normalizer->normalize($object->getUsage(), 'json', $context);
        }

        return $data;
    }
}