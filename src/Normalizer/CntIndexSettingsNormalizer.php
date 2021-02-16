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
        if (property_exists($data, 'filters') && null !== $data->{'filters'}) {
            $values_2 = [];
            foreach ($data->{'filters'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Afosto\\Sdk\\Model\\CntIndexSettingsFiltersItem', 'json', $context);
            }
            $object->setFilters($values_2);
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
        if (null !== $object->getFilters()) {
            $values_2 = [];
            foreach ($object->getFilters() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'filters'} = $values_2;
        }

        return $data;
    }
}
