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

class RelContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelContact' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\RelContact' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\RelContact();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'version') && null !== $data->{'version'}) {
            $object->setVersion($data->{'version'});
        }
        if (property_exists($data, 'email') && null !== $data->{'email'}) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'tags') && null !== $data->{'tags'}) {
            $values = [];
            foreach ($data->{'tags'} as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        }
        if (property_exists($data, 'given_name') && null !== $data->{'given_name'}) {
            $object->setGivenName($data->{'given_name'});
        }
        if (property_exists($data, 'additional_name') && null !== $data->{'additional_name'}) {
            $object->setAdditionalName($data->{'additional_name'});
        }
        if (property_exists($data, 'family_name') && null !== $data->{'family_name'}) {
            $object->setFamilyName($data->{'family_name'});
        }
        if (property_exists($data, 'organisations') && null !== $data->{'organisations'}) {
            $object->setOrganisations($this->denormalizer->denormalize($data->{'organisations'}, 'Afosto\\Sdk\\Model\\RelOrganisationList', 'json', $context));
        }
        if (property_exists($data, 'billing') && null !== $data->{'billing'}) {
            $object->setBilling($this->denormalizer->denormalize($data->{'billing'}, 'Afosto\\Sdk\\Model\\RelAddressList', 'json', $context));
        }
        if (property_exists($data, 'shipping') && null !== $data->{'shipping'}) {
            $object->setShipping($this->denormalizer->denormalize($data->{'shipping'}, 'Afosto\\Sdk\\Model\\RelAddressList', 'json', $context));
        }
        if (property_exists($data, 'phone_numbers') && null !== $data->{'phone_numbers'}) {
            $object->setPhoneNumbers($this->denormalizer->denormalize($data->{'phone_numbers'}, 'Afosto\\Sdk\\Model\\RelPhoneNumberList', 'json', $context));
        }
        if (property_exists($data, 'metadata') && null !== $data->{'metadata'}) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'metadata'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setMetadata($values_1);
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
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data->{'tags'} = $values;
        }
        if (null !== $object->getGivenName()) {
            $data->{'given_name'} = $object->getGivenName();
        }
        if (null !== $object->getAdditionalName()) {
            $data->{'additional_name'} = $object->getAdditionalName();
        }
        if (null !== $object->getFamilyName()) {
            $data->{'family_name'} = $object->getFamilyName();
        }
        if (null !== $object->getOrganisations()) {
            $data->{'organisations'} = $this->normalizer->normalize($object->getOrganisations(), 'json', $context);
        }
        if (null !== $object->getBilling()) {
            $data->{'billing'} = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        if (null !== $object->getShipping()) {
            $data->{'shipping'} = $this->normalizer->normalize($object->getShipping(), 'json', $context);
        }
        if (null !== $object->getPhoneNumbers()) {
            $data->{'phone_numbers'} = $this->normalizer->normalize($object->getPhoneNumbers(), 'json', $context);
        }
        if (null !== $object->getMetadata()) {
            $values_1 = new \stdClass();
            foreach ($object->getMetadata() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'metadata'} = $values_1;
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
