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

class PkrShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\PkrShipment';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\PkrShipment';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\PkrShipment();
        if (property_exists($data, 'address') && $data->{'address'} !== null) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Afosto\\Sdk\\Model\\PkrShipmentAddress', 'json', $context));
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt($data->{'created_at'});
        }
        if (property_exists($data, 'expected_at') && $data->{'expected_at'} !== null) {
            $object->setExpectedAt($data->{'expected_at'});
        }
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'is_notified') && $data->{'is_notified'} !== null) {
            $object->setIsNotified($data->{'is_notified'});
        }
        if (property_exists($data, 'items') && $data->{'items'} !== null) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\PkrShipmentItemsItem', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'method') && $data->{'method'} !== null) {
            $object->setMethod($data->{'method'});
        }
        if (property_exists($data, 'reference') && $data->{'reference'} !== null) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'sale') && $data->{'sale'} !== null) {
            $object->setSale($this->denormalizer->denormalize($data->{'sale'}, 'Afosto\\Sdk\\Model\\PkrShipmentSale', 'json', $context));
        }
        if (property_exists($data, 'shipped_at') && $data->{'shipped_at'} !== null) {
            $object->setShippedAt($data->{'shipped_at'});
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'track_trace') && $data->{'track_trace'} !== null) {
            $object->setTrackTrace($data->{'track_trace'});
        }
        if (property_exists($data, 'warehouse') && $data->{'warehouse'} !== null) {
            $object->setWarehouse($this->denormalizer->denormalize($data->{'warehouse'}, 'Afosto\\Sdk\\Model\\PkrShipmentWarehouse', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt();
        }
        if (null !== $object->getExpectedAt()) {
            $data->{'expected_at'} = $object->getExpectedAt();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsNotified()) {
            $data->{'is_notified'} = $object->getIsNotified();
        }
        if (null !== $object->getItems()) {
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'items'} = $values;
        }
        if (null !== $object->getMethod()) {
            $data->{'method'} = $object->getMethod();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getSale()) {
            $data->{'sale'} = $this->normalizer->normalize($object->getSale(), 'json', $context);
        }
        if (null !== $object->getShippedAt()) {
            $data->{'shipped_at'} = $object->getShippedAt();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getTrackTrace()) {
            $data->{'track_trace'} = $object->getTrackTrace();
        }
        if (null !== $object->getWarehouse()) {
            $data->{'warehouse'} = $this->normalizer->normalize($object->getWarehouse(), 'json', $context);
        }

        return $data;
    }
}
