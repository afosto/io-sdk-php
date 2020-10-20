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

class QcqProxyModelAuthSignatureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\QcqProxyModelAuthSignature' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\QcqProxyModelAuthSignature' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\QcqProxyModelAuthSignature();
        if (property_exists($data, 'secret') && null !== $data->{'secret'}) {
            $object->setSecret($data->{'secret'});
        }
        if (property_exists($data, 'auth') && null !== $data->{'auth'}) {
            $object->setAuth($this->denormalizer->denormalize($data->{'auth'}, 'Afosto\\Sdk\\Model\\QcqAuthConfig', 'json', $context));
        }
        if (property_exists($data, 'cache') && null !== $data->{'cache'}) {
            $object->setCache($this->denormalizer->denormalize($data->{'cache'}, 'Afosto\\Sdk\\Model\\QcqCacheConfig', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSecret()) {
            $data->{'secret'} = $object->getSecret();
        }
        if (null !== $object->getAuth()) {
            $data->{'auth'} = $this->normalizer->normalize($object->getAuth(), 'json', $context);
        }
        if (null !== $object->getCache()) {
            $data->{'cache'} = $this->normalizer->normalize($object->getCache(), 'json', $context);
        }

        return $data;
    }
}
