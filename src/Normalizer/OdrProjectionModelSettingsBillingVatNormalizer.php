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

class OdrProjectionModelSettingsBillingVatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrProjectionModelSettingsBillingVat' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrProjectionModelSettingsBillingVat' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrProjectionModelSettingsBillingVat();
        if (property_exists($data, 'is_shift_disabled') && null !== $data->{'is_shift_disabled'}) {
            $object->setIsShiftDisabled($data->{'is_shift_disabled'});
        }
        if (property_exists($data, 'is_shift_required') && null !== $data->{'is_shift_required'}) {
            $object->setIsShiftRequired($data->{'is_shift_required'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsShiftDisabled()) {
            $data->{'is_shift_disabled'} = $object->getIsShiftDisabled();
        }
        if (null !== $object->getIsShiftRequired()) {
            $data->{'is_shift_required'} = $object->getIsShiftRequired();
        }

        return $data;
    }
}
