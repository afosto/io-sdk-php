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

class OdrGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrGroup' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrGroup' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrGroup();
        if (property_exists($data, 'sku') && null !== $data->{'sku'}) {
            $object->setSku($data->{'sku'});
        }
        if (property_exists($data, 'reference') && null !== $data->{'reference'}) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'description') && null !== $data->{'description'}) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'quantity') && null !== $data->{'quantity'}) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'ids') && null !== $data->{'ids'}) {
            $values = [];
            foreach ($data->{'ids'} as $value) {
                $values[] = $value;
            }
            $object->setIds($values);
        }
        if (property_exists($data, 'references') && null !== $data->{'references'}) {
            $object->setReferences($this->denormalizer->denormalize($data->{'references'}, 'Afosto\\Sdk\\Model\\OdrGroupReferences', 'json', $context));
        }
        if (property_exists($data, 'filters') && null !== $data->{'filters'}) {
            $values_1 = [];
            foreach ($data->{'filters'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrFilter', 'json', $context);
            }
            $object->setFilters($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        if (null !== $object->getIds()) {
            $values = [];
            foreach ($object->getIds() as $value) {
                $values[] = $value;
            }
            $data->{'ids'} = $values;
        }
        if (null !== $object->getReferences()) {
            $data->{'references'} = $this->normalizer->normalize($object->getReferences(), 'json', $context);
        }
        if (null !== $object->getFilters()) {
            $values_1 = [];
            foreach ($object->getFilters() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'filters'} = $values_1;
        }

        return $data;
    }
}
