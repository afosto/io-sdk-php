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

class CntDataflowMatcherModelIdPostResponse200ResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntDataflowMatcherModelIdPostResponse200Result' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntDataflowMatcherModelIdPostResponse200Result' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntDataflowMatcherModelIdPostResponse200Result();
        if (property_exists($data, 'is_match') && null !== $data->{'is_match'}) {
            $object->setIsMatch($data->{'is_match'});
        }
        if (property_exists($data, 'misses') && null !== $data->{'misses'}) {
            $object->setMisses($this->denormalizer->denormalize($data->{'misses'}, 'Afosto\\Sdk\\Model\\CntDataflowMatcherModelIdPostResponse200ResultMisses', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsMatch()) {
            $data->{'is_match'} = $object->getIsMatch();
        }
        if (null !== $object->getMisses()) {
            $data->{'misses'} = $this->normalizer->normalize($object->getMisses(), 'json', $context);
        }

        return $data;
    }
}
