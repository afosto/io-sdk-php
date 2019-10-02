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

class OdrAttemptNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrAttempt';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrAttempt';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrAttempt();
        if (property_exists($data, 'psp_reference') && $data->{'psp_reference'} !== null) {
            $object->setPspReference($data->{'psp_reference'});
        }
        if (property_exists($data, 'started_at') && $data->{'started_at'} !== null) {
            $object->setStartedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'started_at'}));
        }
        if (property_exists($data, 'is_paid') && $data->{'is_paid'} !== null) {
            $object->setIsPaid($data->{'is_paid'});
        }
        if (property_exists($data, 'is_expired') && $data->{'is_expired'} !== null) {
            $object->setIsExpired($data->{'is_expired'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPspReference()) {
            $data->{'psp_reference'} = $object->getPspReference();
        }
        if (null !== $object->getStartedAt()) {
            $data->{'started_at'} = $object->getStartedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getIsPaid()) {
            $data->{'is_paid'} = $object->getIsPaid();
        }
        if (null !== $object->getIsExpired()) {
            $data->{'is_expired'} = $object->getIsExpired();
        }

        return $data;
    }
}