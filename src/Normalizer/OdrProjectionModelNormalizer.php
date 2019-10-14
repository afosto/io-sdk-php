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

class OdrProjectionModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrProjectionModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrProjectionModel';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrProjectionModel();
        if (property_exists($data, 'stack_reference') && $data->{'stack_reference'} !== null) {
            $object->setStackReference($this->denormalizer->denormalize($data->{'stack_reference'}, 'Afosto\\Sdk\\Model\\OdrStackReference', 'json', $context));
        }
        if (property_exists($data, 'client_id') && $data->{'client_id'} !== null) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'items') && $data->{'items'} !== null) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrInvoiceItemModel', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'adjustments') && $data->{'adjustments'} !== null) {
            $values_1 = [];
            foreach ($data->{'adjustments'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrAdjustment', 'json', $context);
            }
            $object->setAdjustments($values_1);
        }
        if (property_exists($data, 'contact_id') && $data->{'contact_id'} !== null) {
            $object->setContactId($data->{'contact_id'});
        }
        if (property_exists($data, 'payment_method_id') && $data->{'payment_method_id'} !== null) {
            $object->setPaymentMethodId($data->{'payment_method_id'});
        }
        if (property_exists($data, 'routes') && $data->{'routes'} !== null) {
            $values_2 = [];
            foreach ($data->{'routes'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRoutes($values_2);
        }
        if (property_exists($data, 'coupons') && $data->{'coupons'} !== null) {
            $values_3 = [];
            foreach ($data->{'coupons'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setCoupons($values_3);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getStackReference()) {
            $data->{'stack_reference'} = $this->normalizer->normalize($object->getStackReference(), 'json', $context);
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
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
        if (null !== $object->getPaymentMethodId()) {
            $data->{'payment_method_id'} = $object->getPaymentMethodId();
        }
        if (null !== $object->getRoutes()) {
            $values_2 = [];
            foreach ($object->getRoutes() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'routes'} = $values_2;
        }
        if (null !== $object->getCoupons()) {
            $values_3 = [];
            foreach ($object->getCoupons() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'coupons'} = $values_3;
        }

        return $data;
    }
}
