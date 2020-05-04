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

class OdrOrderAuthorizationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrOrderAuthorizationResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrOrderAuthorizationResponse' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrOrderAuthorizationResponse();
        if (property_exists($data, 'is_locked') && null !== $data->{'is_locked'}) {
            $object->setIsLocked($data->{'is_locked'});
        }
        if (property_exists($data, 'is_accepted') && null !== $data->{'is_accepted'}) {
            $object->setIsAccepted($data->{'is_accepted'});
        }
        if (property_exists($data, 'is_confirmed') && null !== $data->{'is_confirmed'}) {
            $object->setIsConfirmed($data->{'is_confirmed'});
        }
        if (property_exists($data, 'transaction_secret') && null !== $data->{'transaction_secret'}) {
            $object->setTransactionSecret($data->{'transaction_secret'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsLocked()) {
            $data->{'is_locked'} = $object->getIsLocked();
        }
        if (null !== $object->getIsAccepted()) {
            $data->{'is_accepted'} = $object->getIsAccepted();
        }
        if (null !== $object->getIsConfirmed()) {
            $data->{'is_confirmed'} = $object->getIsConfirmed();
        }
        if (null !== $object->getTransactionSecret()) {
            $data->{'transaction_secret'} = $object->getTransactionSecret();
        }

        return $data;
    }
}