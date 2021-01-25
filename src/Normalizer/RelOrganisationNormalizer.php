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
        return is_object($data) && 'Afosto\\Sdk\\Model\\RelOrganisation' === get_class($data);
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
        if (property_exists($data, 'file_id') && null !== $data->{'file_id'}) {
            $object->setFileId($data->{'file_id'});
        }
        if (property_exists($data, 'coc_number') && null !== $data->{'coc_number'}) {
            $object->setCocNumber($data->{'coc_number'});
        }
        if (property_exists($data, 'account_manager') && null !== $data->{'account_manager'}) {
            $object->setAccountManager($data->{'account_manager'});
        }
        if (property_exists($data, 'administration') && null !== $data->{'administration'}) {
            $object->setAdministration($this->denormalizer->denormalize($data->{'administration'}, 'Afosto\\Sdk\\Model\\RelOrganisationAdministration', 'json', $context));
        }
        if (property_exists($data, 'tags') && null !== $data->{'tags'}) {
            $values = [];
            foreach ($data->{'tags'} as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        }
        if (property_exists($data, 'metadata') && null !== $data->{'metadata'}) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'metadata'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setMetadata($values_1);
        }
        if (property_exists($data, 'registrations') && null !== $data->{'registrations'}) {
            $values_2 = [];
            foreach ($data->{'registrations'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Afosto\\Sdk\\Model\\RelVatRegistration', 'json', $context);
            }
            $object->setRegistrations($values_2);
        }
        if (property_exists($data, 'payment_settings') && null !== $data->{'payment_settings'}) {
            $object->setPaymentSettings($this->denormalizer->denormalize($data->{'payment_settings'}, 'Afosto\\Sdk\\Model\\RelOrganisationPaymentSettings', 'json', $context));
        }
        if (property_exists($data, 'phone_numbers') && null !== $data->{'phone_numbers'}) {
            $object->setPhoneNumbers($this->denormalizer->denormalize($data->{'phone_numbers'}, 'Afosto\\Sdk\\Model\\RelPhoneNumberList', 'json', $context));
        }
        if (property_exists($data, 'billing') && null !== $data->{'billing'}) {
            $object->setBilling($this->denormalizer->denormalize($data->{'billing'}, 'Afosto\\Sdk\\Model\\RelAddressList', 'json', $context));
        }
        if (property_exists($data, 'shipping') && null !== $data->{'shipping'}) {
            $object->setShipping($this->denormalizer->denormalize($data->{'shipping'}, 'Afosto\\Sdk\\Model\\RelAddressList', 'json', $context));
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
        if (null !== $object->getFileId()) {
            $data->{'file_id'} = $object->getFileId();
        }
        if (null !== $object->getCocNumber()) {
            $data->{'coc_number'} = $object->getCocNumber();
        }
        if (null !== $object->getAccountManager()) {
            $data->{'account_manager'} = $object->getAccountManager();
        }
        if (null !== $object->getAdministration()) {
            $data->{'administration'} = $this->normalizer->normalize($object->getAdministration(), 'json', $context);
        }
        if (null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data->{'tags'} = $values;
        }
        if (null !== $object->getMetadata()) {
            $values_1 = new \stdClass();
            foreach ($object->getMetadata() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'metadata'} = $values_1;
        }
        if (null !== $object->getRegistrations()) {
            $values_2 = [];
            foreach ($object->getRegistrations() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'registrations'} = $values_2;
        }
        if (null !== $object->getPaymentSettings()) {
            $data->{'payment_settings'} = $this->normalizer->normalize($object->getPaymentSettings(), 'json', $context);
        }
        if (null !== $object->getPhoneNumbers()) {
            $data->{'phone_numbers'} = $this->normalizer->normalize($object->getPhoneNumbers(), 'json', $context);
        }
        if (null !== $object->getBilling()) {
            $data->{'billing'} = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        if (null !== $object->getShipping()) {
            $data->{'shipping'} = $this->normalizer->normalize($object->getShipping(), 'json', $context);
        }

        return $data;
    }
}
