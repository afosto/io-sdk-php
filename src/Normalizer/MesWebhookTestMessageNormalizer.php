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

class MesWebhookTestMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\MesWebhookTestMessage' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\MesWebhookTestMessage' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\MesWebhookTestMessage();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'event') && null !== $data->{'event'}) {
            $object->setEvent($data->{'event'});
        }
        if (property_exists($data, 'entity_id') && null !== $data->{'entity_id'}) {
            $object->setEntityId($data->{'entity_id'});
        }
        if (property_exists($data, 'payload') && null !== $data->{'payload'}) {
            $object->setPayload($data->{'payload'});
        }
        if (property_exists($data, 'is_pending') && null !== $data->{'is_pending'}) {
            $object->setIsPending($data->{'is_pending'});
        }
        if (property_exists($data, 'is_delivered') && null !== $data->{'is_delivered'}) {
            $object->setIsDelivered($data->{'is_delivered'});
        }
        if (property_exists($data, 'signature') && null !== $data->{'signature'}) {
            $object->setSignature($data->{'signature'});
        }
        if (property_exists($data, 'endpoint') && null !== $data->{'endpoint'}) {
            $object->setEndpoint($data->{'endpoint'});
        }
        if (property_exists($data, 'subscription') && null !== $data->{'subscription'}) {
            $object->setSubscription($data->{'subscription'});
        }
        if (property_exists($data, 'attempt') && null !== $data->{'attempt'}) {
            $object->setAttempt($this->denormalizer->denormalize($data->{'attempt'}, 'Afosto\\Sdk\\Model\\MesWebhookAttempt', 'json', $context));
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
        if (null !== $object->getEvent()) {
            $data->{'event'} = $object->getEvent();
        }
        if (null !== $object->getEntityId()) {
            $data->{'entity_id'} = $object->getEntityId();
        }
        if (null !== $object->getPayload()) {
            $data->{'payload'} = $object->getPayload();
        }
        if (null !== $object->getIsPending()) {
            $data->{'is_pending'} = $object->getIsPending();
        }
        if (null !== $object->getIsDelivered()) {
            $data->{'is_delivered'} = $object->getIsDelivered();
        }
        if (null !== $object->getSignature()) {
            $data->{'signature'} = $object->getSignature();
        }
        if (null !== $object->getEndpoint()) {
            $data->{'endpoint'} = $object->getEndpoint();
        }
        if (null !== $object->getSubscription()) {
            $data->{'subscription'} = $object->getSubscription();
        }
        if (null !== $object->getAttempt()) {
            $data->{'attempt'} = $this->normalizer->normalize($object->getAttempt(), 'json', $context);
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
