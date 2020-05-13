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

class OdrTransactionModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrTransactionModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrTransactionModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrTransactionModel();
        if (property_exists($data, 'reference') && null !== $data->{'reference'}) {
            $object->setReference($this->denormalizer->denormalize($data->{'reference'}, 'Afosto\\Sdk\\Model\\OdrReference', 'json', $context));
        }
        if (property_exists($data, 'description') && null !== $data->{'description'}) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'amount') && null !== $data->{'amount'}) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'currency') && null !== $data->{'currency'}) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'metadata') && null !== $data->{'metadata'}) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'purchase') && null !== $data->{'purchase'}) {
            $object->setPurchase($this->denormalizer->denormalize($data->{'purchase'}, 'Afosto\\Sdk\\Model\\OdrPurchase', 'json', $context));
        }
        if (property_exists($data, 'return_url') && null !== $data->{'return_url'}) {
            $object->setReturnUrl($data->{'return_url'});
        }
        if (property_exists($data, 'client_id') && null !== $data->{'client_id'}) {
            $object->setClientId($data->{'client_id'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReference()) {
            $data->{'reference'} = $this->normalizer->normalize($object->getReference(), 'json', $context);
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getPurchase()) {
            $data->{'purchase'} = $this->normalizer->normalize($object->getPurchase(), 'json', $context);
        }
        if (null !== $object->getReturnUrl()) {
            $data->{'return_url'} = $object->getReturnUrl();
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }

        return $data;
    }
}
