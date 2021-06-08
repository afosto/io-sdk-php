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

class CntIndexSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntIndexSettings' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntIndexSettings' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntIndexSettings();
        if (property_exists($data, 'synonyms') && null !== $data->{'synonyms'}) {
            $object->setSynonyms($data->{'synonyms'});
        }
        if (property_exists($data, 'stop_words') && null !== $data->{'stop_words'}) {
            $values = [];
            foreach ($data->{'stop_words'} as $value) {
                $values[] = $value;
            }
            $object->setStopWords($values);
        }
        if (property_exists($data, 'ranking_rules') && null !== $data->{'ranking_rules'}) {
            $values_1 = [];
            foreach ($data->{'ranking_rules'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRankingRules($values_1);
        }
        if (property_exists($data, 'facet_fields') && null !== $data->{'facet_fields'}) {
            $values_2 = [];
            foreach ($data->{'facet_fields'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setFacetFields($values_2);
        }
        if (property_exists($data, 'distinct_field') && null !== $data->{'distinct_field'}) {
            $object->setDistinctField($data->{'distinct_field'});
        }
        if (property_exists($data, 'search_fields') && null !== $data->{'search_fields'}) {
            $values_3 = [];
            foreach ($data->{'search_fields'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setSearchFields($values_3);
        }
        if (property_exists($data, 'display_fields') && null !== $data->{'display_fields'}) {
            $values_4 = [];
            foreach ($data->{'display_fields'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setDisplayFields($values_4);
        }
        if (property_exists($data, 'filters') && null !== $data->{'filters'}) {
            $values_5 = [];
            foreach ($data->{'filters'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Afosto\\Sdk\\Model\\CntListIndexFilter', 'json', $context);
            }
            $object->setFilters($values_5);
        }
        if (property_exists($data, 'last_processed_at') && null !== $data->{'last_processed_at'}) {
            $object->setLastProcessedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'last_processed_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSynonyms()) {
            $data->{'synonyms'} = $object->getSynonyms();
        }
        if (null !== $object->getStopWords()) {
            $values = [];
            foreach ($object->getStopWords() as $value) {
                $values[] = $value;
            }
            $data->{'stop_words'} = $values;
        }
        if (null !== $object->getRankingRules()) {
            $values_1 = [];
            foreach ($object->getRankingRules() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'ranking_rules'} = $values_1;
        }
        if (null !== $object->getFacetFields()) {
            $values_2 = [];
            foreach ($object->getFacetFields() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'facet_fields'} = $values_2;
        }
        if (null !== $object->getDistinctField()) {
            $data->{'distinct_field'} = $object->getDistinctField();
        }
        if (null !== $object->getSearchFields()) {
            $values_3 = [];
            foreach ($object->getSearchFields() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'search_fields'} = $values_3;
        }
        if (null !== $object->getDisplayFields()) {
            $values_4 = [];
            foreach ($object->getDisplayFields() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'display_fields'} = $values_4;
        }
        if (null !== $object->getFilters()) {
            $values_5 = [];
            foreach ($object->getFilters() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'filters'} = $values_5;
        }
        if (null !== $object->getLastProcessedAt()) {
            $data->{'last_processed_at'} = $object->getLastProcessedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
