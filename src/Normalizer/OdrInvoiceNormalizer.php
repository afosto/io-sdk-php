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

class OdrInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrInvoice';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrInvoice';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrInvoice();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'number') && $data->{'number'} !== null) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'items') && $data->{'items'} !== null) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrInvoiceItem', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'subtotal') && $data->{'subtotal'} !== null) {
            $object->setSubtotal($data->{'subtotal'});
        }
        if (property_exists($data, 'adjustments') && $data->{'adjustments'} !== null) {
            $values_1 = [];
            foreach ($data->{'adjustments'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrAdjustmentResponse', 'json', $context);
            }
            $object->setAdjustments($values_1);
        }
        if (property_exists($data, 'total') && $data->{'total'} !== null) {
            $object->setTotal($data->{'total'});
        }
        if (property_exists($data, 'vat') && $data->{'vat'} !== null) {
            $values_2 = [];
            foreach ($data->{'vat'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Afosto\\Sdk\\Model\\OdrVatResult', 'json', $context);
            }
            $object->setVat($values_2);
        }
        if (property_exists($data, 'currency') && $data->{'currency'} !== null) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'customer') && $data->{'customer'} !== null) {
            $object->setCustomer($this->denormalizer->denormalize($data->{'customer'}, 'Afosto\\Sdk\\Model\\OdrContact', 'json', $context));
        }
        if (property_exists($data, 'vendor') && $data->{'vendor'} !== null) {
            $object->setVendor($this->denormalizer->denormalize($data->{'vendor'}, 'Afosto\\Sdk\\Model\\OdrContact', 'json', $context));
        }
        if (property_exists($data, 'is_concept') && $data->{'is_concept'} !== null) {
            $object->setIsConcept($data->{'is_concept'});
        }
        if (property_exists($data, 'is_paid') && $data->{'is_paid'} !== null) {
            $object->setIsPaid($data->{'is_paid'});
        }
        if (property_exists($data, 'is_including_vat') && $data->{'is_including_vat'} !== null) {
            $object->setIsIncludingVat($data->{'is_including_vat'});
        }
        if (property_exists($data, 'is_vat_shifted') && $data->{'is_vat_shifted'} !== null) {
            $object->setIsVatShifted($data->{'is_vat_shifted'});
        }
        if (property_exists($data, 'stack_id') && $data->{'stack_id'} !== null) {
            $object->setStackId($data->{'stack_id'});
        }
        if (property_exists($data, 'client_id') && $data->{'client_id'} !== null) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'file_id') && $data->{'file_id'} !== null) {
            $object->setFileId($data->{'file_id'});
        }
        if (property_exists($data, 'metadata') && $data->{'metadata'} !== null) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'pricing_at') && $data->{'pricing_at'} !== null) {
            $object->setPricingAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'pricing_at'}));
        }
        if (property_exists($data, 'billed_at') && $data->{'billed_at'} !== null) {
            $object->setBilledAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'billed_at'}));
        }
        if (property_exists($data, 'paid_at') && $data->{'paid_at'} !== null) {
            $object->setPaidAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'paid_at'}));
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
        if (null !== $object->getItems()) {
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'items'} = $values;
        }
        if (null !== $object->getSubtotal()) {
            $data->{'subtotal'} = $object->getSubtotal();
        }
        if (null !== $object->getAdjustments()) {
            $values_1 = [];
            foreach ($object->getAdjustments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'adjustments'} = $values_1;
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        }
        if (null !== $object->getVat()) {
            $values_2 = [];
            foreach ($object->getVat() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'vat'} = $values_2;
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getCustomer()) {
            $data->{'customer'} = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
        }
        if (null !== $object->getVendor()) {
            $data->{'vendor'} = $this->normalizer->normalize($object->getVendor(), 'json', $context);
        }
        if (null !== $object->getIsConcept()) {
            $data->{'is_concept'} = $object->getIsConcept();
        }
        if (null !== $object->getIsPaid()) {
            $data->{'is_paid'} = $object->getIsPaid();
        }
        if (null !== $object->getIsIncludingVat()) {
            $data->{'is_including_vat'} = $object->getIsIncludingVat();
        }
        if (null !== $object->getIsVatShifted()) {
            $data->{'is_vat_shifted'} = $object->getIsVatShifted();
        }
        if (null !== $object->getStackId()) {
            $data->{'stack_id'} = $object->getStackId();
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        if (null !== $object->getFileId()) {
            $data->{'file_id'} = $object->getFileId();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getPricingAt()) {
            $data->{'pricing_at'} = $object->getPricingAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getBilledAt()) {
            $data->{'billed_at'} = $object->getBilledAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getPaidAt()) {
            $data->{'paid_at'} = $object->getPaidAt()->format("Y-m-d\TH:i:sP");
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
