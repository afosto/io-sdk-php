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

class OdrContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrContact' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrContact' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrContact();
        if (property_exists($data, 'tags') && null !== $data->{'tags'}) {
            $values = [];
            foreach ($data->{'tags'} as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        }
        if (property_exists($data, 'vat_country_code') && null !== $data->{'vat_country_code'}) {
            $object->setVatCountryCode($data->{'vat_country_code'});
        }
        if (property_exists($data, 'contact') && null !== $data->{'contact'}) {
            $object->setContact($this->denormalizer->denormalize($data->{'contact'}, 'Afosto\\Sdk\\Model\\OdrContactContact', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data->{'tags'} = $values;
        }
        if (null !== $object->getVatCountryCode()) {
            $data->{'vat_country_code'} = $object->getVatCountryCode();
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }

        return $data;
    }
}
