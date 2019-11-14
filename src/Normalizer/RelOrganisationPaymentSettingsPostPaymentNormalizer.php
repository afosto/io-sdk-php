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

class RelOrganisationPaymentSettingsPostPaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\RelOrganisationPaymentSettingsPostPayment';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\RelOrganisationPaymentSettingsPostPayment';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\RelOrganisationPaymentSettingsPostPayment();
        if (property_exists($data, 'spending_limit') && $data->{'spending_limit'} !== null) {
            $object->setSpendingLimit($data->{'spending_limit'});
        }
        if (property_exists($data, 'current_due_amount') && $data->{'current_due_amount'} !== null) {
            $object->setCurrentDueAmount($data->{'current_due_amount'});
        }
        if (property_exists($data, 'due_after') && $data->{'due_after'} !== null) {
            $object->setDueAfter($data->{'due_after'});
        }
        if (property_exists($data, 'iban') && $data->{'iban'} !== null) {
            $object->setIban($data->{'iban'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSpendingLimit()) {
            $data->{'spending_limit'} = $object->getSpendingLimit();
        }
        if (null !== $object->getCurrentDueAmount()) {
            $data->{'current_due_amount'} = $object->getCurrentDueAmount();
        }
        if (null !== $object->getDueAfter()) {
            $data->{'due_after'} = $object->getDueAfter();
        }
        if (null !== $object->getIban()) {
            $data->{'iban'} = $object->getIban();
        }

        return $data;
    }
}
