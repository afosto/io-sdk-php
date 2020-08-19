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

class WmsSubTransferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\WmsSubTransfer' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\WmsSubTransfer' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsSubTransfer();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'transfer_id') && null !== $data->{'transfer_id'}) {
            $object->setTransferId($data->{'transfer_id'});
        }
        if (property_exists($data, 'from') && null !== $data->{'from'}) {
            $object->setFrom($data->{'from'});
        }
        if (property_exists($data, 'status') && null !== $data->{'status'}) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'route_id') && null !== $data->{'route_id'}) {
            $object->setRouteId($data->{'route_id'});
        }
        if (property_exists($data, 'ship_at') && null !== $data->{'ship_at'}) {
            $object->setShipAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'ship_at'}));
        }
        if (property_exists($data, 'expected_at') && null !== $data->{'expected_at'}) {
            $object->setExpectedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expected_at'}));
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
        if (null !== $object->getTransferId()) {
            $data->{'transfer_id'} = $object->getTransferId();
        }
        if (null !== $object->getFrom()) {
            $data->{'from'} = $object->getFrom();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getRouteId()) {
            $data->{'route_id'} = $object->getRouteId();
        }
        if (null !== $object->getShipAt()) {
            $data->{'ship_at'} = $object->getShipAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getExpectedAt()) {
            $data->{'expected_at'} = $object->getExpectedAt()->format("Y-m-d\TH:i:sP");
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
