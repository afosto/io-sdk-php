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

class OdrSessionProjectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrSessionProjection' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrSessionProjection' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrSessionProjection();
        if (property_exists($data, 'items') && null !== $data->{'items'}) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrSessionProjectionItem', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'subtotal') && null !== $data->{'subtotal'}) {
            $object->setSubtotal($data->{'subtotal'});
        }
        if (property_exists($data, 'adjustments') && null !== $data->{'adjustments'}) {
            $values_1 = [];
            foreach ($data->{'adjustments'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrSessionCalculationAdjustment', 'json', $context);
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
        if (property_exists($data, 'is_including_vat') && null !== $data->{'is_including_vat'}) {
            $object->setIsIncludingVat($data->{'is_including_vat'});
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
        if (null !== $object->getIsIncludingVat()) {
            $data->{'is_including_vat'} = $object->getIsIncludingVat();
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
