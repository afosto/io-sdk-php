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

class OdrPaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrPayment';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrPayment';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrPayment();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'reference') && $data->{'reference'} !== null) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'provider_code') && $data->{'provider_code'} !== null) {
            $object->setProviderCode($data->{'provider_code'});
        }
        if (property_exists($data, 'method_code') && $data->{'method_code'} !== null) {
            $object->setMethodCode($data->{'method_code'});
        }
        if (property_exists($data, 'issuer_code') && $data->{'issuer_code'} !== null) {
            $object->setIssuerCode($data->{'issuer_code'});
        }
        if (property_exists($data, 'is_refund') && $data->{'is_refund'} !== null) {
            $object->setIsRefund($data->{'is_refund'});
        }
        if (property_exists($data, 'is_pending') && $data->{'is_pending'} !== null) {
            $object->setIsPending($data->{'is_pending'});
        }
        if (property_exists($data, 'is_paid') && $data->{'is_paid'} !== null) {
            $object->setIsPaid($data->{'is_paid'});
        }
        if (property_exists($data, 'is_authorized') && $data->{'is_authorized'} !== null) {
            $object->setIsAuthorized($data->{'is_authorized'});
        }
        if (property_exists($data, 'is_captured') && $data->{'is_captured'} !== null) {
            $object->setIsCaptured($data->{'is_captured'});
        }
        if (property_exists($data, 'metadata') && $data->{'metadata'} !== null) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'paid_at') && $data->{'paid_at'} !== null) {
            $object->setPaidAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'paid_at'}));
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
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
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getProviderCode()) {
            $data->{'provider_code'} = $object->getProviderCode();
        }
        if (null !== $object->getMethodCode()) {
            $data->{'method_code'} = $object->getMethodCode();
        }
        if (null !== $object->getIssuerCode()) {
            $data->{'issuer_code'} = $object->getIssuerCode();
        }
        if (null !== $object->getIsRefund()) {
            $data->{'is_refund'} = $object->getIsRefund();
        }
        if (null !== $object->getIsPending()) {
            $data->{'is_pending'} = $object->getIsPending();
        }
        if (null !== $object->getIsPaid()) {
            $data->{'is_paid'} = $object->getIsPaid();
        }
        if (null !== $object->getIsAuthorized()) {
            $data->{'is_authorized'} = $object->getIsAuthorized();
        }
        if (null !== $object->getIsCaptured()) {
            $data->{'is_captured'} = $object->getIsCaptured();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getPaidAt()) {
            $data->{'paid_at'} = $object->getPaidAt()->format("Y-m-d\TH:i:sP");
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
