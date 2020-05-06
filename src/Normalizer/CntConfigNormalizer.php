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

class CntConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntConfig' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntConfig' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntConfig();
        if (property_exists($data, 'is_origin_cache_ignored') && null !== $data->{'is_origin_cache_ignored'}) {
            $object->setIsOriginCacheIgnored($data->{'is_origin_cache_ignored'});
        }
        if (property_exists($data, 'is_canonical_added') && null !== $data->{'is_canonical_added'}) {
            $object->setIsCanonicalAdded($data->{'is_canonical_added'});
        }
        if (property_exists($data, 'watermark_url') && null !== $data->{'watermark_url'}) {
            $object->setWatermarkUrl($data->{'watermark_url'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsOriginCacheIgnored()) {
            $data->{'is_origin_cache_ignored'} = $object->getIsOriginCacheIgnored();
        }
        if (null !== $object->getIsCanonicalAdded()) {
            $data->{'is_canonical_added'} = $object->getIsCanonicalAdded();
        }
        if (null !== $object->getWatermarkUrl()) {
            $data->{'watermark_url'} = $object->getWatermarkUrl();
        }

        return $data;
    }
}
