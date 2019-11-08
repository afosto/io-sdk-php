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

class OdrInvoiceStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrInvoiceState';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrInvoiceState';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrInvoiceState();
        if (property_exists($data, 'is_concept') && $data->{'is_concept'} !== null) {
            $object->setIsConcept($data->{'is_concept'});
        }
        if (property_exists($data, 'is_paid') && $data->{'is_paid'} !== null) {
            $object->setIsPaid($data->{'is_paid'});
        }
        if (property_exists($data, 'paid_at') && $data->{'paid_at'} !== null) {
            $object->setPaidAt($data->{'paid_at'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsConcept()) {
            $data->{'is_concept'} = $object->getIsConcept();
        }
        if (null !== $object->getIsPaid()) {
            $data->{'is_paid'} = $object->getIsPaid();
        }
        if (null !== $object->getPaidAt()) {
            $data->{'paid_at'} = $object->getPaidAt();
        }

        return $data;
    }
}