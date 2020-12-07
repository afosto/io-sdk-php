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

class WmsTransfersTransferIdTransportsIdShipmentPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\WmsTransfersTransferIdTransportsIdShipmentPutBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\WmsTransfersTransferIdTransportsIdShipmentPutBody' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsTransfersTransferIdTransportsIdShipmentPutBody();
        if (property_exists($data, 'inbound_shipment_id') && null !== $data->{'inbound_shipment_id'}) {
            $object->setInboundShipmentId($data->{'inbound_shipment_id'});
        }
        if (property_exists($data, 'outbound_shipment_id') && null !== $data->{'outbound_shipment_id'}) {
            $object->setOutboundShipmentId($data->{'outbound_shipment_id'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getInboundShipmentId()) {
            $data->{'inbound_shipment_id'} = $object->getInboundShipmentId();
        }
        if (null !== $object->getOutboundShipmentId()) {
            $data->{'outbound_shipment_id'} = $object->getOutboundShipmentId();
        }

        return $data;
    }
}