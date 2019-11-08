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

class LcsShipmentItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\LcsShipmentItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\LcsShipmentItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsShipmentItem();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'sku') && $data->{'sku'} !== null) {
            $object->setSku($data->{'sku'});
        }
        if (property_exists($data, 'position') && $data->{'position'} !== null) {
            $object->setPosition($data->{'position'});
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'is_boxed') && $data->{'is_boxed'} !== null) {
            $object->setIsBoxed($data->{'is_boxed'});
        }
        if (property_exists($data, 'is_listed') && $data->{'is_listed'} !== null) {
            $object->setIsListed($data->{'is_listed'});
        }
        if (property_exists($data, 'hs_code') && $data->{'hs_code'} !== null) {
            $object->setHsCode($data->{'hs_code'});
        }
        if (property_exists($data, 'service') && $data->{'service'} !== null) {
            $values = [];
            foreach ($data->{'service'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\LcsServiceOption', 'json', $context);
            }
            $object->setService($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        if (null !== $object->getPosition()) {
            $data->{'position'} = $object->getPosition();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getIsBoxed()) {
            $data->{'is_boxed'} = $object->getIsBoxed();
        }
        if (null !== $object->getIsListed()) {
            $data->{'is_listed'} = $object->getIsListed();
        }
        if (null !== $object->getHsCode()) {
            $data->{'hs_code'} = $object->getHsCode();
        }
        if (null !== $object->getService()) {
            $values = [];
            foreach ($object->getService() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'service'} = $values;
        }

        return $data;
    }
}