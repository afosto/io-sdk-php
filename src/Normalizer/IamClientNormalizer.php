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

class IamClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\IamClient';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\IamClient';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\IamClient();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'client_id') && $data->{'client_id'} !== null) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'client_secret') && $data->{'client_secret'} !== null) {
            $object->setClientSecret($data->{'client_secret'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'redirect_uri') && $data->{'redirect_uri'} !== null) {
            $object->setRedirectUri($data->{'redirect_uri'});
        }
        if (property_exists($data, 'grant_types') && $data->{'grant_types'} !== null) {
            $values = [];
            foreach ($data->{'grant_types'} as $value) {
                $values[] = $value;
            }
            $object->setGrantTypes($values);
        }
        if (property_exists($data, 'scope') && $data->{'scope'} !== null) {
            $values_1 = [];
            foreach ($data->{'scope'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setScope($values_1);
        }
        if (property_exists($data, 'tenant_id') && $data->{'tenant_id'} !== null) {
            $object->setTenantId($data->{'tenant_id'});
        }
        if (property_exists($data, 'is_approved') && $data->{'is_approved'} !== null) {
            $object->setIsApproved($data->{'is_approved'});
        }
        if (property_exists($data, 'collection') && $data->{'collection'} !== null) {
            $object->setCollection($data->{'collection'});
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
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
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        if (null !== $object->getClientSecret()) {
            $data->{'client_secret'} = $object->getClientSecret();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRedirectUri()) {
            $data->{'redirect_uri'} = $object->getRedirectUri();
        }
        if (null !== $object->getGrantTypes()) {
            $values = [];
            foreach ($object->getGrantTypes() as $value) {
                $values[] = $value;
            }
            $data->{'grant_types'} = $values;
        }
        if (null !== $object->getScope()) {
            $values_1 = [];
            foreach ($object->getScope() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'scope'} = $values_1;
        }
        if (null !== $object->getTenantId()) {
            $data->{'tenant_id'} = $object->getTenantId();
        }
        if (null !== $object->getIsApproved()) {
            $data->{'is_approved'} = $object->getIsApproved();
        }
        if (null !== $object->getCollection()) {
            $data->{'collection'} = $object->getCollection();
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
