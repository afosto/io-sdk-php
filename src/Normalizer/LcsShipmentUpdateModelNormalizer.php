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

class LcsShipmentUpdateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsShipmentUpdateModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\LcsShipmentUpdateModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsShipmentUpdateModel();
        if (property_exists($data, 'method_id') && null !== $data->{'method_id'}) {
            $object->setMethodId($data->{'method_id'});
        }
        if (property_exists($data, 'addressing') && null !== $data->{'addressing'}) {
            $object->setAddressing($this->denormalizer->denormalize($data->{'addressing'}, 'Afosto\\Sdk\\Model\\LcsShipmentUpdateModelAddressing', 'json', $context));
        }
        if (property_exists($data, 'prior_shipments') && null !== $data->{'prior_shipments'}) {
            $values = [];
            foreach ($data->{'prior_shipments'} as $value) {
                $values[] = $value;
            }
            $object->setPriorShipments($values);
        }
        if (property_exists($data, 'expected_at') && null !== $data->{'expected_at'}) {
            $object->setExpectedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expected_at'}));
        }
        if (property_exists($data, 'ship_at') && null !== $data->{'ship_at'}) {
            $object->setShipAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'ship_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMethodId()) {
            $data->{'method_id'} = $object->getMethodId();
        }
        if (null !== $object->getAddressing()) {
            $data->{'addressing'} = $this->normalizer->normalize($object->getAddressing(), 'json', $context);
        }
        if (null !== $object->getPriorShipments()) {
            $values = [];
            foreach ($object->getPriorShipments() as $value) {
                $values[] = $value;
            }
            $data->{'prior_shipments'} = $values;
        }
        if (null !== $object->getExpectedAt()) {
            $data->{'expected_at'} = $object->getExpectedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getShipAt()) {
            $data->{'ship_at'} = $object->getShipAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
