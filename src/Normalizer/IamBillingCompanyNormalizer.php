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

class IamBillingCompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\IamBillingCompany' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\IamBillingCompany' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\IamBillingCompany();
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'vat_number') && null !== $data->{'vat_number'}) {
            $object->setVatNumber($data->{'vat_number'});
        }
        if (property_exists($data, 'billing_email') && null !== $data->{'billing_email'}) {
            $object->setBillingEmail($data->{'billing_email'});
        }
        if (property_exists($data, 'phone_number') && null !== $data->{'phone_number'}) {
            $object->setPhoneNumber($data->{'phone_number'});
        }
        if (property_exists($data, 'address') && null !== $data->{'address'}) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Afosto\\Sdk\\Model\\IamAddress', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getVatNumber()) {
            $data->{'vat_number'} = $object->getVatNumber();
        }
        if (null !== $object->getBillingEmail()) {
            $data->{'billing_email'} = $object->getBillingEmail();
        }
        if (null !== $object->getPhoneNumber()) {
            $data->{'phone_number'} = $object->getPhoneNumber();
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }

        return $data;
    }
}
