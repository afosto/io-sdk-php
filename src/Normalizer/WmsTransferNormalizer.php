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

class WmsTransferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\WmsTransfer';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\WmsTransfer';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsTransfer();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'to') && $data->{'to'} !== null) {
            $object->setTo($data->{'to'});
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'collections') && $data->{'collections'} !== null) {
            $values = [];
            foreach ($data->{'collections'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\WmsTransferRoute', 'json', $context);
            }
            $object->setCollections($values);
        }
        if (property_exists($data, 'deliveries') && $data->{'deliveries'} !== null) {
            $values_1 = [];
            foreach ($data->{'deliveries'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\WmsTransferRoute', 'json', $context);
            }
            $object->setDeliveries($values_1);
        }
        if (property_exists($data, 'is_collection_pending') && $data->{'is_collection_pending'} !== null) {
            $object->setIsCollectionPending($data->{'is_collection_pending'});
        }
        if (property_exists($data, 'stack_reference') && $data->{'stack_reference'} !== null) {
            $object->setStackReference($data->{'stack_reference'});
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updated_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getTo()) {
            $data->{'to'} = $object->getTo();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getCollections()) {
            $values = [];
            foreach ($object->getCollections() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'collections'} = $values;
        }
        if (null !== $object->getDeliveries()) {
            $values_1 = [];
            foreach ($object->getDeliveries() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'deliveries'} = $values_1;
        }
        if (null !== $object->getIsCollectionPending()) {
            $data->{'is_collection_pending'} = $object->getIsCollectionPending();
        }
        if (null !== $object->getStackReference()) {
            $data->{'stack_reference'} = $object->getStackReference();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
