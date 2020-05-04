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

class CntProxyUpdateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntProxyUpdateModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntProxyUpdateModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntProxyUpdateModel();
        if (property_exists($data, 'origin') && null !== $data->{'origin'}) {
            $object->setOrigin($data->{'origin'});
        }
        if (property_exists($data, 'config') && null !== $data->{'config'}) {
            $object->setConfig($this->denormalizer->denormalize($data->{'config'}, 'Afosto\\Sdk\\Model\\CntConfig', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOrigin()) {
            $data->{'origin'} = $object->getOrigin();
        }
        if (null !== $object->getConfig()) {
            $data->{'config'} = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }

        return $data;
    }
}
