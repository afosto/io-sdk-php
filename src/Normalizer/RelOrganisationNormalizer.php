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

class RelOrganisationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelOrganisation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelOrganisation' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\RelOrganisation();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'version') && null !== $data->{'version'}) {
            $object->setVersion($data->{'version'});
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'registrations') && null !== $data->{'registrations'}) {
            $values = [];
            foreach ($data->{'registrations'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\RelVatRegistration', 'json', $context);
            }
            $object->setRegistrations($values);
        }
        if (property_exists($data, 'payment_settings') && null !== $data->{'payment_settings'}) {
            $object->setPaymentSettings($this->denormalizer->denormalize($data->{'payment_settings'}, 'Afosto\\Sdk\\Model\\RelOrganisationPaymentSettings', 'json', $context));
        }
        if (property_exists($data, 'phone_numbers') && null !== $data->{'phone_numbers'}) {
            $object->setPhoneNumbers($this->denormalizer->denormalize($data->{'phone_numbers'}, 'Afosto\\Sdk\\Model\\RelPhoneNumberList', 'json', $context));
        }
        if (property_exists($data, 'addresses') && null !== $data->{'addresses'}) {
            $object->setAddresses($this->denormalizer->denormalize($data->{'addresses'}, 'Afosto\\Sdk\\Model\\RelAddressList', 'json', $context));
        }
        if (property_exists($data, 'coc_number') && null !== $data->{'coc_number'}) {
            $object->setCocNumber($data->{'coc_number'});
        }
        if (property_exists($data, 'account_manager') && null !== $data->{'account_manager'}) {
            $object->setAccountManager($data->{'account_manager'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRegistrations()) {
            $values = [];
            foreach ($object->getRegistrations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'registrations'} = $values;
        }
        if (null !== $object->getPaymentSettings()) {
            $data->{'payment_settings'} = $this->normalizer->normalize($object->getPaymentSettings(), 'json', $context);
        }
        if (null !== $object->getPhoneNumbers()) {
            $data->{'phone_numbers'} = $this->normalizer->normalize($object->getPhoneNumbers(), 'json', $context);
        }
        if (null !== $object->getAddresses()) {
            $data->{'addresses'} = $this->normalizer->normalize($object->getAddresses(), 'json', $context);
        }
        if (null !== $object->getCocNumber()) {
            $data->{'coc_number'} = $object->getCocNumber();
        }
        if (null !== $object->getAccountManager()) {
            $data->{'account_manager'} = $object->getAccountManager();
        }

        return $data;
    }
}
