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

class OdrGroupReferencesOrdersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrGroupReferencesOrdersItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrGroupReferencesOrdersItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrGroupReferencesOrdersItem();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'is_inbound') && null !== $data->{'is_inbound'}) {
            $object->setIsInbound($data->{'is_inbound'});
        }
        if (property_exists($data, 'is_backordered') && null !== $data->{'is_backordered'}) {
            $object->setIsBackordered($data->{'is_backordered'});
        }
        if (property_exists($data, 'is_unavailable') && null !== $data->{'is_unavailable'}) {
            $object->setIsUnavailable($data->{'is_unavailable'});
        }
        if (property_exists($data, 'warehouse') && null !== $data->{'warehouse'}) {
            $object->setWarehouse($this->denormalizer->denormalize($data->{'warehouse'}, 'Afosto\\Sdk\\Model\\OdrGroupReferencesOrdersItemWarehouse', 'json', $context));
        }
        if (property_exists($data, 'shipments') && null !== $data->{'shipments'}) {
            $values = [];
            foreach ($data->{'shipments'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrGroupReferencesOrdersItemShipmentsItem', 'json', $context);
            }
            $object->setShipments($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsInbound()) {
            $data->{'is_inbound'} = $object->getIsInbound();
        }
        if (null !== $object->getIsBackordered()) {
            $data->{'is_backordered'} = $object->getIsBackordered();
        }
        if (null !== $object->getIsUnavailable()) {
            $data->{'is_unavailable'} = $object->getIsUnavailable();
        }
        if (null !== $object->getWarehouse()) {
            $data->{'warehouse'} = $this->normalizer->normalize($object->getWarehouse(), 'json', $context);
        }
        if (null !== $object->getShipments()) {
            $values = [];
            foreach ($object->getShipments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'shipments'} = $values;
        }

        return $data;
    }
}
