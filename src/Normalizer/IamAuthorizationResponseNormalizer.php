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

class IamAuthorizationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\IamAuthorizationResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\IamAuthorizationResponse';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\IamAuthorizationResponse();
        if (property_exists($data, 'forward_uri') && $data->{'forward_uri'} !== null) {
            $object->setForwardUri($data->{'forward_uri'});
        }
        if (property_exists($data, 'client_name') && $data->{'client_name'} !== null) {
            $object->setClientName($data->{'client_name'});
        }
        if (property_exists($data, 'scope') && $data->{'scope'} !== null) {
            $values = [];
            foreach ($data->{'scope'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\IamScope', 'json', $context);
            }
            $object->setScope($values);
        }
        if (property_exists($data, 'is_authorization_approved') && $data->{'is_authorization_approved'} !== null) {
            $object->setIsAuthorizationApproved($data->{'is_authorization_approved'});
        }
        if (property_exists($data, 'is_id_token_issued') && $data->{'is_id_token_issued'} !== null) {
            $object->setIsIdTokenIssued($data->{'is_id_token_issued'});
        }
        if (property_exists($data, 'expires_in') && $data->{'expires_in'} !== null) {
            $object->setExpiresIn($data->{'expires_in'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getForwardUri()) {
            $data->{'forward_uri'} = $object->getForwardUri();
        }
        if (null !== $object->getClientName()) {
            $data->{'client_name'} = $object->getClientName();
        }
        if (null !== $object->getScope()) {
            $values = [];
            foreach ($object->getScope() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'scope'} = $values;
        }
        if (null !== $object->getIsAuthorizationApproved()) {
            $data->{'is_authorization_approved'} = $object->getIsAuthorizationApproved();
        }
        if (null !== $object->getIsIdTokenIssued()) {
            $data->{'is_id_token_issued'} = $object->getIsIdTokenIssued();
        }
        if (null !== $object->getExpiresIn()) {
            $data->{'expires_in'} = $object->getExpiresIn();
        }

        return $data;
    }
}
