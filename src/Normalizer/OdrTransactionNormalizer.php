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

class OdrTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrTransaction' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrTransaction' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrTransaction();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'reference') && null !== $data->{'reference'}) {
            $object->setReference($this->denormalizer->denormalize($data->{'reference'}, 'Afosto\\Sdk\\Model\\OdrReference', 'json', $context));
        }
        if (property_exists($data, 'number') && null !== $data->{'number'}) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'amount_due') && null !== $data->{'amount_due'}) {
            $object->setAmountDue($data->{'amount_due'});
        }
        if (property_exists($data, 'amount_paid') && null !== $data->{'amount_paid'}) {
            $object->setAmountPaid($data->{'amount_paid'});
        }
        if (property_exists($data, 'currency') && null !== $data->{'currency'}) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'payments') && null !== $data->{'payments'}) {
            $values = [];
            foreach ($data->{'payments'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrPayment', 'json', $context);
            }
            $object->setPayments($values);
        }
        if (property_exists($data, 'metadata') && null !== $data->{'metadata'}) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'purchase') && null !== $data->{'purchase'}) {
            $object->setPurchase($this->denormalizer->denormalize($data->{'purchase'}, 'Afosto\\Sdk\\Model\\OdrPurchase', 'json', $context));
        }
        if (property_exists($data, 'webhook_url') && null !== $data->{'webhook_url'}) {
            $object->setWebhookUrl($data->{'webhook_url'});
        }
        if (property_exists($data, 'secret') && null !== $data->{'secret'}) {
            $object->setSecret($data->{'secret'});
        }
        if (property_exists($data, 'client_id') && null !== $data->{'client_id'}) {
            $object->setClientId($data->{'client_id'});
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
        if (null !== $object->getReference()) {
            $data->{'reference'} = $this->normalizer->normalize($object->getReference(), 'json', $context);
        }
        if (null !== $object->getNumber()) {
            $data->{'number'} = $object->getNumber();
        }
        if (null !== $object->getAmountDue()) {
            $data->{'amount_due'} = $object->getAmountDue();
        }
        if (null !== $object->getAmountPaid()) {
            $data->{'amount_paid'} = $object->getAmountPaid();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getPayments()) {
            $values = [];
            foreach ($object->getPayments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'payments'} = $values;
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getPurchase()) {
            $data->{'purchase'} = $this->normalizer->normalize($object->getPurchase(), 'json', $context);
        }
        if (null !== $object->getWebhookUrl()) {
            $data->{'webhook_url'} = $object->getWebhookUrl();
        }
        if (null !== $object->getSecret()) {
            $data->{'secret'} = $object->getSecret();
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
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
