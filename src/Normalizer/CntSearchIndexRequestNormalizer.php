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

class CntSearchIndexRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntSearchIndexRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntSearchIndexRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntSearchIndexRequest();
        if (property_exists($data, 'q') && null !== $data->{'q'}) {
            $object->setQ($data->{'q'});
        }
        if (property_exists($data, 'offset') && null !== $data->{'offset'}) {
            $object->setOffset($data->{'offset'});
        }
        if (property_exists($data, 'limit') && null !== $data->{'limit'}) {
            $object->setLimit($data->{'limit'});
        }
        if (property_exists($data, 'threshold') && null !== $data->{'threshold'}) {
            $object->setThreshold($data->{'threshold'});
        }
        if (property_exists($data, 'filters') && null !== $data->{'filters'}) {
            $values = [];
            foreach ($data->{'filters'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\CntInstantFilter', 'json', $context);
            }
            $object->setFilters($values);
        }
        if (property_exists($data, 'facets') && null !== $data->{'facets'}) {
            $values_1 = [];
            foreach ($data->{'facets'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFacets($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getQ()) {
            $data->{'q'} = $object->getQ();
        }
        if (null !== $object->getOffset()) {
            $data->{'offset'} = $object->getOffset();
        }
        if (null !== $object->getLimit()) {
            $data->{'limit'} = $object->getLimit();
        }
        if (null !== $object->getThreshold()) {
            $data->{'threshold'} = $object->getThreshold();
        }
        if (null !== $object->getFilters()) {
            $values = [];
            foreach ($object->getFilters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'filters'} = $values;
        }
        if (null !== $object->getFacets()) {
            $values_1 = [];
            foreach ($object->getFacets() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'facets'} = $values_1;
        }

        return $data;
    }
}
