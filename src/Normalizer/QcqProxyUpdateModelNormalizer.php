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

class QcqProxyUpdateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\QcqProxyUpdateModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\QcqProxyUpdateModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\QcqProxyUpdateModel();
        if (property_exists($data, 'routes') && null !== $data->{'routes'}) {
            $values = [];
            foreach ($data->{'routes'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\QcqRoute', 'json', $context);
            }
            $object->setRoutes($values);
        }
        if (property_exists($data, 'auth') && null !== $data->{'auth'}) {
            $object->setAuth($this->denormalizer->denormalize($data->{'auth'}, 'Afosto\\Sdk\\Model\\QcqProxyUpdateModelAuth', 'json', $context));
        }
        if (property_exists($data, 'oauth') && null !== $data->{'oauth'}) {
            $object->setOauth($this->denormalizer->denormalize($data->{'oauth'}, 'Afosto\\Sdk\\Model\\QcqProxyUpdateModelOauth', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRoutes()) {
            $values = [];
            foreach ($object->getRoutes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'routes'} = $values;
        }
        if (null !== $object->getAuth()) {
            $data->{'auth'} = $this->normalizer->normalize($object->getAuth(), 'json', $context);
        }
        if (null !== $object->getOauth()) {
            $data->{'oauth'} = $this->normalizer->normalize($object->getOauth(), 'json', $context);
        }

        return $data;
    }
}
