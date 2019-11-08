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

class OdrOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrOrder';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrOrder';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrOrder();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'number') && $data->{'number'} !== null) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'client_id') && $data->{'client_id'} !== null) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'contact_id') && $data->{'contact_id'} !== null) {
            $object->setContactId($data->{'contact_id'});
        }
        if (property_exists($data, 'organisation_id') && $data->{'organisation_id'} !== null) {
            $object->setOrganisationId($data->{'organisation_id'});
        }
        if (property_exists($data, 'state') && $data->{'state'} !== null) {
            $object->setState($this->denormalizer->denormalize($data->{'state'}, 'Afosto\\Sdk\\Model\\OdrState', 'json', $context));
        }
        if (property_exists($data, 'stacks') && $data->{'stacks'} !== null) {
            $values = [];
            foreach ($data->{'stacks'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrStackOrderReference', 'json', $context);
            }
            $object->setStacks($values);
        }
        if (property_exists($data, 'address_id') && $data->{'address_id'} !== null) {
            $object->setAddressId($data->{'address_id'});
        }
        if (property_exists($data, 'shipment_address_id') && $data->{'shipment_address_id'} !== null) {
            $object->setShipmentAddressId($data->{'shipment_address_id'});
        }
        if (property_exists($data, 'metadata') && $data->{'metadata'} !== null) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'due_at') && $data->{'due_at'} !== null) {
            $object->setDueAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'due_at'}));
        }
        if (property_exists($data, 'deleted_at') && $data->{'deleted_at'} !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'deleted_at'}));
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
        if (null !== $object->getNumber()) {
            $data->{'number'} = $object->getNumber();
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        if (null !== $object->getContactId()) {
            $data->{'contact_id'} = $object->getContactId();
        }
        if (null !== $object->getOrganisationId()) {
            $data->{'organisation_id'} = $object->getOrganisationId();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $this->normalizer->normalize($object->getState(), 'json', $context);
        }
        if (null !== $object->getStacks()) {
            $values = [];
            foreach ($object->getStacks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'stacks'} = $values;
        }
        if (null !== $object->getAddressId()) {
            $data->{'address_id'} = $object->getAddressId();
        }
        if (null !== $object->getShipmentAddressId()) {
            $data->{'shipment_address_id'} = $object->getShipmentAddressId();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getDueAt()) {
            $data->{'due_at'} = $object->getDueAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getDeletedAt()) {
            $data->{'deleted_at'} = $object->getDeletedAt()->format("Y-m-d\TH:i:sP");
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
