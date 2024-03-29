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

class IamQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\IamQuery' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\IamQuery' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\IamQuery();
        if (property_exists($data, 'filter') && null !== $data->{'filter'}) {
            $values = [];
            foreach ($data->{'filter'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\IamQueryConstraint', 'json', $context);
            }
            $object->setFilter($values);
        }
        if (property_exists($data, 'limit') && null !== $data->{'limit'}) {
            $object->setLimit($data->{'limit'});
        }
        if (property_exists($data, 'offset') && null !== $data->{'offset'}) {
            $object->setOffset($data->{'offset'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFilter()) {
            $values = [];
            foreach ($object->getFilter() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'filter'} = $values;
        }
        if (null !== $object->getLimit()) {
            $data->{'limit'} = $object->getLimit();
        }
        if (null !== $object->getOffset()) {
            $data->{'offset'} = $object->getOffset();
        }

        return $data;
    }
}
