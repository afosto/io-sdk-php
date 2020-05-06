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

class CatVatRateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CatVatRate' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CatVatRate' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CatVatRate();
        if (property_exists($data, 'reference') && null !== $data->{'reference'}) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'rate') && null !== $data->{'rate'}) {
            $object->setRate($data->{'rate'});
        }
        if (property_exists($data, 'country') && null !== $data->{'country'}) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'is_default') && null !== $data->{'is_default'}) {
            $object->setIsDefault($data->{'is_default'});
        }
        if (property_exists($data, 'administrative_area') && null !== $data->{'administrative_area'}) {
            $object->setAdministrativeArea($data->{'administrative_area'});
        }
        if (property_exists($data, 'active_at') && null !== $data->{'active_at'}) {
            $object->setActiveAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'active_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getRate()) {
            $data->{'rate'} = $object->getRate();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getIsDefault()) {
            $data->{'is_default'} = $object->getIsDefault();
        }
        if (null !== $object->getAdministrativeArea()) {
            $data->{'administrative_area'} = $object->getAdministrativeArea();
        }
        if (null !== $object->getActiveAt()) {
            $data->{'active_at'} = $object->getActiveAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
