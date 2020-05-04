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

class OdrCalculationAdjustmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrCalculationAdjustment' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrCalculationAdjustment' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrCalculationAdjustment();
        if (property_exists($data, 'reference') && null !== $data->{'reference'}) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'description') && null !== $data->{'description'}) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'amount') && null !== $data->{'amount'}) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'is_percentage') && null !== $data->{'is_percentage'}) {
            $object->setIsPercentage($data->{'is_percentage'});
        }
        if (property_exists($data, 'is_discount') && null !== $data->{'is_discount'}) {
            $object->setIsDiscount($data->{'is_discount'});
        }
        if (property_exists($data, 'result') && null !== $data->{'result'}) {
            $object->setResult($this->denormalizer->denormalize($data->{'result'}, 'Afosto\\Sdk\\Model\\OdrCalculationAdjustmentResult', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getIsPercentage()) {
            $data->{'is_percentage'} = $object->getIsPercentage();
        }
        if (null !== $object->getIsDiscount()) {
            $data->{'is_discount'} = $object->getIsDiscount();
        }
        if (null !== $object->getResult()) {
            $data->{'result'} = $this->normalizer->normalize($object->getResult(), 'json', $context);
        }

        return $data;
    }
}
