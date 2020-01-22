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

class MesWebhookAttemptNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\MesWebhookAttempt' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\MesWebhookAttempt' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\MesWebhookAttempt();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'number') && null !== $data->{'number'}) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'is_success') && null !== $data->{'is_success'}) {
            $object->setIsSuccess($data->{'is_success'});
        }
        if (property_exists($data, 'response_time') && null !== $data->{'response_time'}) {
            $object->setResponseTime($data->{'response_time'});
        }
        if (property_exists($data, 'response_code') && null !== $data->{'response_code'}) {
            $object->setResponseCode($data->{'response_code'});
        }
        if (property_exists($data, 'response_body') && null !== $data->{'response_body'}) {
            $object->setResponseBody($data->{'response_body'});
        }
        if (property_exists($data, 'attempted_at') && null !== $data->{'attempted_at'}) {
            $object->setAttemptedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'attempted_at'}));
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
        if (null !== $object->getIsSuccess()) {
            $data->{'is_success'} = $object->getIsSuccess();
        }
        if (null !== $object->getResponseTime()) {
            $data->{'response_time'} = $object->getResponseTime();
        }
        if (null !== $object->getResponseCode()) {
            $data->{'response_code'} = $object->getResponseCode();
        }
        if (null !== $object->getResponseBody()) {
            $data->{'response_body'} = $object->getResponseBody();
        }
        if (null !== $object->getAttemptedAt()) {
            $data->{'attempted_at'} = $object->getAttemptedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}