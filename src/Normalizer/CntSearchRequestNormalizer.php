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

class CntSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntSearchRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntSearchRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntSearchRequest();
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
        if (property_exists($data, 'indices') && null !== $data->{'indices'}) {
            $values = [];
            foreach ($data->{'indices'} as $value) {
                $values[] = $value;
            }
            $object->setIndices($values);
        }
        if (property_exists($data, 'filters') && null !== $data->{'filters'}) {
            $values_1 = [];
            foreach ($data->{'filters'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\CntInstantFilter', 'json', $context);
            }
            $object->setFilters($values_1);
        }
        if (property_exists($data, 'facets') && null !== $data->{'facets'}) {
            $values_2 = [];
            foreach ($data->{'facets'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setFacets($values_2);
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
        if (null !== $object->getIndices()) {
            $values = [];
            foreach ($object->getIndices() as $value) {
                $values[] = $value;
            }
            $data->{'indices'} = $values;
        }
        if (null !== $object->getFilters()) {
            $values_1 = [];
            foreach ($object->getFilters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'filters'} = $values_1;
        }
        if (null !== $object->getFacets()) {
            $values_2 = [];
            foreach ($object->getFacets() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'facets'} = $values_2;
        }

        return $data;
    }
}
