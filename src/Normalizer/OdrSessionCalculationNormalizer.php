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

class OdrSessionCalculationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrSessionCalculation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrSessionCalculation' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrSessionCalculation();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'number') && null !== $data->{'number'}) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'items') && null !== $data->{'items'}) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrSessionProjectionItem', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'services') && null !== $data->{'services'}) {
            $values_1 = [];
            foreach ($data->{'services'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrSessionCalculationServiceItem', 'json', $context);
            }
            $object->setServices($values_1);
        }
        if (property_exists($data, 'subtotal') && null !== $data->{'subtotal'}) {
            $object->setSubtotal($data->{'subtotal'});
        }
        if (property_exists($data, 'adjustments') && null !== $data->{'adjustments'}) {
            $values_2 = [];
            foreach ($data->{'adjustments'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Afosto\\Sdk\\Model\\OdrSessionCalculationAdjustment', 'json', $context);
            }
            $object->setAdjustments($values_2);
        }
        if (property_exists($data, 'total') && null !== $data->{'total'}) {
            $object->setTotal($data->{'total'});
        }
        if (property_exists($data, 'vat') && null !== $data->{'vat'}) {
            $values_3 = [];
            foreach ($data->{'vat'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Afosto\\Sdk\\Model\\OdrVatResult', 'json', $context);
            }
            $object->setVat($values_3);
        }
        if (property_exists($data, 'currency') && null !== $data->{'currency'}) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'is_including_vat') && null !== $data->{'is_including_vat'}) {
            $object->setIsIncludingVat($data->{'is_including_vat'});
        }
        if (property_exists($data, 'is_vat_shifted') && null !== $data->{'is_vat_shifted'}) {
            $object->setIsVatShifted($data->{'is_vat_shifted'});
        }
        if (property_exists($data, 'client_id') && null !== $data->{'client_id'}) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'pricing_at') && null !== $data->{'pricing_at'}) {
            $object->setPricingAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'pricing_at'}));
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
        if (null !== $object->getServices()) {
            $values_1 = [];
            foreach ($object->getServices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'services'} = $values_1;
        }
        if (null !== $object->getSubtotal()) {
            $data->{'subtotal'} = $object->getSubtotal();
        }
        if (null !== $object->getAdjustments()) {
            $values_2 = [];
            foreach ($object->getAdjustments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'adjustments'} = $values_2;
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        }
        if (null !== $object->getVat()) {
            $values_3 = [];
            foreach ($object->getVat() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'vat'} = $values_3;
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getIsIncludingVat()) {
            $data->{'is_including_vat'} = $object->getIsIncludingVat();
        }
        if (null !== $object->getIsVatShifted()) {
            $data->{'is_vat_shifted'} = $object->getIsVatShifted();
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        if (null !== $object->getPricingAt()) {
            $data->{'pricing_at'} = $object->getPricingAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
