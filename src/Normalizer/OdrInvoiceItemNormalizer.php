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

class OdrInvoiceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrInvoiceItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrInvoiceItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrInvoiceItem();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'reference') && null !== $data->{'reference'}) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'sku') && null !== $data->{'sku'}) {
            $object->setSku($data->{'sku'});
        }
        if (property_exists($data, 'description') && null !== $data->{'description'}) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'amount') && null !== $data->{'amount'}) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'is_discounted') && null !== $data->{'is_discounted'}) {
            $object->setIsDiscounted($data->{'is_discounted'});
        }
        if (property_exists($data, 'quantity') && null !== $data->{'quantity'}) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'subtotal') && null !== $data->{'subtotal'}) {
            $object->setSubtotal($data->{'subtotal'});
        }
        if (property_exists($data, 'adjustments') && null !== $data->{'adjustments'}) {
            $values = [];
            foreach ($data->{'adjustments'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrInvoiceAdjustmentResponse', 'json', $context);
            }
            $object->setAdjustments($values);
        }
        if (property_exists($data, 'vat_percentage') && null !== $data->{'vat_percentage'}) {
            $object->setVatPercentage($data->{'vat_percentage'});
        }
        if (property_exists($data, 'total') && null !== $data->{'total'}) {
            $object->setTotal($data->{'total'});
        }
        if (property_exists($data, 'total_revenue') && null !== $data->{'total_revenue'}) {
            $object->setTotalRevenue($data->{'total_revenue'});
        }
        if (property_exists($data, 'order_items') && null !== $data->{'order_items'}) {
            $values_1 = [];
            foreach ($data->{'order_items'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrCalculationOrderItem', 'json', $context);
            }
            $object->setOrderItems($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getIsDiscounted()) {
            $data->{'is_discounted'} = $object->getIsDiscounted();
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        if (null !== $object->getSubtotal()) {
            $data->{'subtotal'} = $object->getSubtotal();
        }
        if (null !== $object->getAdjustments()) {
            $values = [];
            foreach ($object->getAdjustments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'adjustments'} = $values;
        }
        if (null !== $object->getVatPercentage()) {
            $data->{'vat_percentage'} = $object->getVatPercentage();
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        }
        if (null !== $object->getTotalRevenue()) {
            $data->{'total_revenue'} = $object->getTotalRevenue();
        }
        if (null !== $object->getOrderItems()) {
            $values_1 = [];
            foreach ($object->getOrderItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'order_items'} = $values_1;
        }

        return $data;
    }
}
