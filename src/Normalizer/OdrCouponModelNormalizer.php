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

class OdrCouponModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrCouponModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrCouponModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrCouponModel();
        if (property_exists($data, 'code') && null !== $data->{'code'}) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'usage') && null !== $data->{'usage'}) {
            $object->setUsage($this->denormalizer->denormalize($data->{'usage'}, 'Afosto\\Sdk\\Model\\OdrCouponUsage', 'json', $context));
        }
        if (property_exists($data, 'category_id') && null !== $data->{'category_id'}) {
            $object->setCategoryId($data->{'category_id'});
        }
        if (property_exists($data, 'expires_at') && null !== $data->{'expires_at'}) {
            $object->setExpiresAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expires_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getUsage()) {
            $data->{'usage'} = $this->normalizer->normalize($object->getUsage(), 'json', $context);
        }
        if (null !== $object->getCategoryId()) {
            $data->{'category_id'} = $object->getCategoryId();
        }
        if (null !== $object->getExpiresAt()) {
            $data->{'expires_at'} = $object->getExpiresAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
