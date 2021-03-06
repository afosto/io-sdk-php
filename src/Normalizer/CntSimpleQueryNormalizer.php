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

class CntSimpleQueryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntSimpleQuery' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntSimpleQuery' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntSimpleQuery();
        if (property_exists($data, 'codes') && null !== $data->{'codes'}) {
            $values = [];
            foreach ($data->{'codes'} as $value) {
                $values[] = $value;
            }
            $object->setCodes($values);
        }
        if (property_exists($data, 'models') && null !== $data->{'models'}) {
            $values_1 = [];
            foreach ($data->{'models'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setModels($values_1);
        }
        if (property_exists($data, 'namespaces') && null !== $data->{'namespaces'}) {
            $values_2 = [];
            foreach ($data->{'namespaces'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setNamespaces($values_2);
        }
        if (property_exists($data, 'q') && null !== $data->{'q'}) {
            $values_3 = [];
            foreach ($data->{'q'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setQ($values_3);
        }
        if (property_exists($data, 'is_fuzzy') && null !== $data->{'is_fuzzy'}) {
            $object->setIsFuzzy($data->{'is_fuzzy'});
        }
        if (property_exists($data, 'limit') && null !== $data->{'limit'}) {
            $object->setLimit($data->{'limit'});
        }
        if (property_exists($data, 'threshold') && null !== $data->{'threshold'}) {
            $object->setThreshold($data->{'threshold'});
        }
        if (property_exists($data, 'page_cursor') && null !== $data->{'page_cursor'}) {
            $object->setPageCursor($data->{'page_cursor'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCodes()) {
            $values = [];
            foreach ($object->getCodes() as $value) {
                $values[] = $value;
            }
            $data->{'codes'} = $values;
        }
        if (null !== $object->getModels()) {
            $values_1 = [];
            foreach ($object->getModels() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'models'} = $values_1;
        }
        if (null !== $object->getNamespaces()) {
            $values_2 = [];
            foreach ($object->getNamespaces() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'namespaces'} = $values_2;
        }
        if (null !== $object->getQ()) {
            $values_3 = [];
            foreach ($object->getQ() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'q'} = $values_3;
        }
        if (null !== $object->getIsFuzzy()) {
            $data->{'is_fuzzy'} = $object->getIsFuzzy();
        }
        if (null !== $object->getLimit()) {
            $data->{'limit'} = $object->getLimit();
        }
        if (null !== $object->getThreshold()) {
            $data->{'threshold'} = $object->getThreshold();
        }
        if (null !== $object->getPageCursor()) {
            $data->{'page_cursor'} = $object->getPageCursor();
        }

        return $data;
    }
}
