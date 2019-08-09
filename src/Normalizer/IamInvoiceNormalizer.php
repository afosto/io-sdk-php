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

class IamInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\IamInvoice';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\IamInvoice';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\IamInvoice();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'total') && $data->{'total'} !== null) {
            $object->setTotal($data->{'total'});
        }
        if (property_exists($data, 'is_paid') && $data->{'is_paid'} !== null) {
            $object->setIsPaid($data->{'is_paid'});
        }
        if (property_exists($data, 'is_cancelled') && $data->{'is_cancelled'} !== null) {
            $object->setIsCancelled($data->{'is_cancelled'});
        }
        if (property_exists($data, 'invoiced_at') && $data->{'invoiced_at'} !== null) {
            $object->setInvoicedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'invoiced_at'}));
        }
        if (property_exists($data, 'reference') && $data->{'reference'} !== null) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'pdf') && $data->{'pdf'} !== null) {
            $object->setPdf($data->{'pdf'});
        }
        if (property_exists($data, 'payment_url') && $data->{'payment_url'} !== null) {
            $object->setPaymentUrl($data->{'payment_url'});
        }
        if (property_exists($data, 'start_at') && $data->{'start_at'} !== null) {
            $object->setStartAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'start_at'}));
        }
        if (property_exists($data, 'end_at') && $data->{'end_at'} !== null) {
            $object->setEndAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'end_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $object->getTotal();
        }
        if (null !== $object->getIsPaid()) {
            $data->{'is_paid'} = $object->getIsPaid();
        }
        if (null !== $object->getIsCancelled()) {
            $data->{'is_cancelled'} = $object->getIsCancelled();
        }
        if (null !== $object->getInvoicedAt()) {
            $data->{'invoiced_at'} = $object->getInvoicedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getPdf()) {
            $data->{'pdf'} = $object->getPdf();
        }
        if (null !== $object->getPaymentUrl()) {
            $data->{'payment_url'} = $object->getPaymentUrl();
        }
        if (null !== $object->getStartAt()) {
            $data->{'start_at'} = $object->getStartAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getEndAt()) {
            $data->{'end_at'} = $object->getEndAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
