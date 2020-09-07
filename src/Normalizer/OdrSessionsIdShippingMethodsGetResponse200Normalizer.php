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

class OdrSessionsIdShippingMethodsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrSessionsIdShippingMethodsGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrSessionsIdShippingMethodsGetResponse200' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrSessionsIdShippingMethodsGetResponse200();
        if (property_exists($data, 'active') && null !== $data->{'active'}) {
            $object->setActive($this->denormalizer->denormalize($data->{'active'}, 'Afosto\\Sdk\\Model\\OdrSelectSessionShippingMethodRequest', 'json', $context));
        }
        if (property_exists($data, 'options') && null !== $data->{'options'}) {
            $values = [];
            foreach ($data->{'options'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrGetSessionShippingMethodResponse', 'json', $context);
            }
            $object->setOptions($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getActive()) {
            $data->{'active'} = $this->normalizer->normalize($object->getActive(), 'json', $context);
        }
        if (null !== $object->getOptions()) {
            $values = [];
            foreach ($object->getOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'options'} = $values;
        }

        return $data;
    }
}
