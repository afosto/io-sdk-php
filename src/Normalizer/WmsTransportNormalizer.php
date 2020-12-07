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

class WmsTransportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\WmsTransport' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\WmsTransport' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsTransport();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'previous') && null !== $data->{'previous'}) {
            $object->setPrevious($data->{'previous'});
        }
        if (property_exists($data, 'next') && null !== $data->{'next'}) {
            $object->setNext($data->{'next'});
        }
        if (property_exists($data, 'status') && null !== $data->{'status'}) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'inbound_shipment_id') && null !== $data->{'inbound_shipment_id'}) {
            $object->setInboundShipmentId($data->{'inbound_shipment_id'});
        }
        if (property_exists($data, 'outbound_shipment_id') && null !== $data->{'outbound_shipment_id'}) {
            $object->setOutboundShipmentId($data->{'outbound_shipment_id'});
        }
        if (property_exists($data, 'reference') && null !== $data->{'reference'}) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'from') && null !== $data->{'from'}) {
            $object->setFrom($data->{'from'});
        }
        if (property_exists($data, 'departure_at') && null !== $data->{'departure_at'}) {
            $object->setDepartureAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'departure_at'}));
        }
        if (property_exists($data, 'to') && null !== $data->{'to'}) {
            $object->setTo($data->{'to'});
        }
        if (property_exists($data, 'arrival_at') && null !== $data->{'arrival_at'}) {
            $object->setArrivalAt($data->{'arrival_at'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getPrevious()) {
            $data->{'previous'} = $object->getPrevious();
        }
        if (null !== $object->getNext()) {
            $data->{'next'} = $object->getNext();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getInboundShipmentId()) {
            $data->{'inbound_shipment_id'} = $object->getInboundShipmentId();
        }
        if (null !== $object->getOutboundShipmentId()) {
            $data->{'outbound_shipment_id'} = $object->getOutboundShipmentId();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getFrom()) {
            $data->{'from'} = $object->getFrom();
        }
        if (null !== $object->getDepartureAt()) {
            $data->{'departure_at'} = $object->getDepartureAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getTo()) {
            $data->{'to'} = $object->getTo();
        }
        if (null !== $object->getArrivalAt()) {
            $data->{'arrival_at'} = $object->getArrivalAt();
        }

        return $data;
    }
}