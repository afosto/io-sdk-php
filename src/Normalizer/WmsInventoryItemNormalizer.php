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

class WmsInventoryItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\WmsInventoryItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\WmsInventoryItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsInventoryItem();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'sku') && null !== $data->{'sku'}) {
            $object->setSku($data->{'sku'});
        }
        if (property_exists($data, 'claim_id') && null !== $data->{'claim_id'}) {
            $object->setClaimId($data->{'claim_id'});
        }
        if (property_exists($data, 'location_id') && null !== $data->{'location_id'}) {
            $object->setLocationId($data->{'location_id'});
        }
        if (property_exists($data, 'metadata') && null !== $data->{'metadata'}) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'metadata'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetadata($values);
        }
        if (property_exists($data, 'state') && null !== $data->{'state'}) {
            $object->setState($data->{'state'});
        }
        if (property_exists($data, 'position') && null !== $data->{'position'}) {
            $object->setPosition($data->{'position'});
        }
        if (property_exists($data, 'lot_number') && null !== $data->{'lot_number'}) {
            $object->setLotNumber($data->{'lot_number'});
        }
        if (property_exists($data, 'expires_at') && null !== $data->{'expires_at'}) {
            $object->setExpiresAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expires_at'}));
        }
        if (property_exists($data, 'created_at') && null !== $data->{'created_at'}) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at') && null !== $data->{'updated_at'}) {
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
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        if (null !== $object->getClaimId()) {
            $data->{'claim_id'} = $object->getClaimId();
        }
        if (null !== $object->getLocationId()) {
            $data->{'location_id'} = $object->getLocationId();
        }
        if (null !== $object->getMetadata()) {
            $values = new \stdClass();
            foreach ($object->getMetadata() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'metadata'} = $values;
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        if (null !== $object->getPosition()) {
            $data->{'position'} = $object->getPosition();
        }
        if (null !== $object->getLotNumber()) {
            $data->{'lot_number'} = $object->getLotNumber();
        }
        if (null !== $object->getExpiresAt()) {
            $data->{'expires_at'} = $object->getExpiresAt()->format("Y-m-d\TH:i:sP");
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
