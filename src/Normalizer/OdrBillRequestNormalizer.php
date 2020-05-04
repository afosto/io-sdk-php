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

class OdrBillRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrBillRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrBillRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrBillRequest();
        if (property_exists($data, 'stack_id') && null !== $data->{'stack_id'}) {
            $object->setStackId($data->{'stack_id'});
        }
        if (property_exists($data, 'client_id') && null !== $data->{'client_id'}) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'currency') && null !== $data->{'currency'}) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'items') && null !== $data->{'items'}) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrInvoiceItemModel', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'adjustments') && null !== $data->{'adjustments'}) {
            $values_1 = [];
            foreach ($data->{'adjustments'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrAdjustment', 'json', $context);
            }
            $object->setAdjustments($values_1);
        }
        if (property_exists($data, 'contact_id') && null !== $data->{'contact_id'}) {
            $object->setContactId($data->{'contact_id'});
        }
        if (property_exists($data, 'organisation_id') && null !== $data->{'organisation_id'}) {
            $object->setOrganisationId($data->{'organisation_id'});
        }
        if (property_exists($data, 'address_id') && null !== $data->{'address_id'}) {
            $object->setAddressId($data->{'address_id'});
        }
        if (property_exists($data, 'shipment_address_id') && null !== $data->{'shipment_address_id'}) {
            $object->setShipmentAddressId($data->{'shipment_address_id'});
        }
        if (property_exists($data, 'pricing_at') && null !== $data->{'pricing_at'}) {
            $object->setPricingAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'pricing_at'}));
        }
        if (property_exists($data, 'coupons') && null !== $data->{'coupons'}) {
            $values_2 = [];
            foreach ($data->{'coupons'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCoupons($values_2);
        }
        if (property_exists($data, 'metadata') && null !== $data->{'metadata'}) {
            $object->setMetadata($data->{'metadata'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getStackId()) {
            $data->{'stack_id'} = $object->getStackId();
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getItems()) {
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'items'} = $values;
        }
        if (null !== $object->getAdjustments()) {
            $values_1 = [];
            foreach ($object->getAdjustments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'adjustments'} = $values_1;
        }
        if (null !== $object->getContactId()) {
            $data->{'contact_id'} = $object->getContactId();
        }
        if (null !== $object->getOrganisationId()) {
            $data->{'organisation_id'} = $object->getOrganisationId();
        }
        if (null !== $object->getAddressId()) {
            $data->{'address_id'} = $object->getAddressId();
        }
        if (null !== $object->getShipmentAddressId()) {
            $data->{'shipment_address_id'} = $object->getShipmentAddressId();
        }
        if (null !== $object->getPricingAt()) {
            $data->{'pricing_at'} = $object->getPricingAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getCoupons()) {
            $values_2 = [];
            foreach ($object->getCoupons() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'coupons'} = $values_2;
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }

        return $data;
    }
}
