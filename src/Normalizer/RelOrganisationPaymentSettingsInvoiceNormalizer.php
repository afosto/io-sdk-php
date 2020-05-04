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

class RelOrganisationPaymentSettingsInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelOrganisationPaymentSettingsInvoice' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelOrganisationPaymentSettingsInvoice' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\RelOrganisationPaymentSettingsInvoice();
        if (property_exists($data, 'is_expected_through_post_mail') && null !== $data->{'is_expected_through_post_mail'}) {
            $object->setIsExpectedThroughPostMail($data->{'is_expected_through_post_mail'});
        }
        if (property_exists($data, 'is_expected_through_email') && null !== $data->{'is_expected_through_email'}) {
            $object->setIsExpectedThroughEmail($data->{'is_expected_through_email'});
        }
        if (property_exists($data, 'is_expected_at_delivery') && null !== $data->{'is_expected_at_delivery'}) {
            $object->setIsExpectedAtDelivery($data->{'is_expected_at_delivery'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsExpectedThroughPostMail()) {
            $data->{'is_expected_through_post_mail'} = $object->getIsExpectedThroughPostMail();
        }
        if (null !== $object->getIsExpectedThroughEmail()) {
            $data->{'is_expected_through_email'} = $object->getIsExpectedThroughEmail();
        }
        if (null !== $object->getIsExpectedAtDelivery()) {
            $data->{'is_expected_at_delivery'} = $object->getIsExpectedAtDelivery();
        }

        return $data;
    }
}
