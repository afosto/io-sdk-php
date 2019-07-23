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

class IamTrialNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\IamTrial';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\IamTrial';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\IamTrial();
        if (property_exists($data, 'is_on_trial') && $data->{'is_on_trial'} !== null) {
            $object->setIsOnTrial($data->{'is_on_trial'});
        }
        if (property_exists($data, 'trial_balance') && $data->{'trial_balance'} !== null) {
            $object->setTrialBalance($data->{'trial_balance'});
        }
        if (property_exists($data, 'trial_ends_at') && $data->{'trial_ends_at'} !== null) {
            $object->setTrialEndsAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'trial_ends_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsOnTrial()) {
            $data->{'is_on_trial'} = $object->getIsOnTrial();
        }
        if (null !== $object->getTrialBalance()) {
            $data->{'trial_balance'} = $object->getTrialBalance();
        }
        if (null !== $object->getTrialEndsAt()) {
            $data->{'trial_ends_at'} = $object->getTrialEndsAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
