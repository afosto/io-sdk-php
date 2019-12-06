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

class OdrCalculationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrCalculation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrCalculation' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrCalculation();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'version') && null !== $data->{'version'}) {
            $object->setVersion($data->{'version'});
        }
        if (property_exists($data, 'number') && null !== $data->{'number'}) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'items') && null !== $data->{'items'}) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrCalculationItem', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'subtotal') && null !== $data->{'subtotal'}) {
            $object->setSubtotal($data->{'subtotal'});
        }
        if (property_exists($data, 'adjustments') && null !== $data->{'adjustments'}) {
            $values_1 = [];
            foreach ($data->{'adjustments'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrCalculationAdjustment', 'json', $context);
            }
            $object->setAdjustments($values_1);
        }
        if (property_exists($data, 'total') && null !== $data->{'total'}) {
            $object->setTotal($data->{'total'});
        }
        if (property_exists($data, 'vat') && null !== $data->{'vat'}) {
            $values_2 = [];
            foreach ($data->{'vat'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Afosto\\Sdk\\Model\\OdrVatResult', 'json', $context);
            }
            $object->setVat($values_2);
        }
        if (property_exists($data, 'currency') && null !== $data->{'currency'}) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'customer') && null !== $data->{'customer'}) {
            $object->setCustomer($this->denormalizer->denormalize($data->{'customer'}, 'Afosto\\Sdk\\Model\\OdrContact', 'json', $context));
        }
        if (property_exists($data, 'vendor') && null !== $data->{'vendor'}) {
            $object->setVendor($this->denormalizer->denormalize($data->{'vendor'}, 'Afosto\\Sdk\\Model\\OdrContact', 'json', $context));
        }
        if (property_exists($data, 'is_including_vat') && null !== $data->{'is_including_vat'}) {
            $object->setIsIncludingVat($data->{'is_including_vat'});
        }
        if (property_exists($data, 'is_vat_shifted') && null !== $data->{'is_vat_shifted'}) {
            $object->setIsVatShifted($data->{'is_vat_shifted'});
        }
        if (property_exists($data, 'is_authorized') && null !== $data->{'is_authorized'}) {
            $object->setIsAuthorized($data->{'is_authorized'});
        }
        if (property_exists($data, 'is_invoiced') && null !== $data->{'is_invoiced'}) {
            $object->setIsInvoiced($data->{'is_invoiced'});
        }
        if (property_exists($data, 'client_id') && null !== $data->{'client_id'}) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'file_id') && null !== $data->{'file_id'}) {
            $object->setFileId($data->{'file_id'});
        }
        if (property_exists($data, 'metadata') && null !== $data->{'metadata'}) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'pricing_at') && null !== $data->{'pricing_at'}) {
            $object->setPricingAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'pricing_at'}));
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
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
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
        if (null !== $object->getIsIncludingVat()) {
            $data->{'is_including_vat'} = $object->getIsIncludingVat();
        }
        if (null !== $object->getIsVatShifted()) {
            $data->{'is_vat_shifted'} = $object->getIsVatShifted();
        }
        if (null !== $object->getIsAuthorized()) {
            $data->{'is_authorized'} = $object->getIsAuthorized();
        }
        if (null !== $object->getIsInvoiced()) {
            $data->{'is_invoiced'} = $object->getIsInvoiced();
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
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
