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

class OdrMethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrMethod' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrMethod' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrMethod();
        if (property_exists($data, 'code') && null !== $data->{'code'}) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'provider_code') && null !== $data->{'provider_code'}) {
            $object->setProviderCode($data->{'provider_code'});
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'label') && null !== $data->{'label'}) {
            $object->setLabel($data->{'label'});
        }
        if (property_exists($data, 'is_prepaid') && null !== $data->{'is_prepaid'}) {
            $object->setIsPrepaid($data->{'is_prepaid'});
        }
        if (property_exists($data, 'issuers') && null !== $data->{'issuers'}) {
            $values = [];
            foreach ($data->{'issuers'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrIssuer', 'json', $context);
            }
            $object->setIssuers($values);
        }
        if (property_exists($data, 'is_enabled') && null !== $data->{'is_enabled'}) {
            $object->setIsEnabled($data->{'is_enabled'});
        }
        if (property_exists($data, 'is_deferred') && null !== $data->{'is_deferred'}) {
            $object->setIsDeferred($data->{'is_deferred'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getProviderCode()) {
            $data->{'provider_code'} = $object->getProviderCode();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getLabel()) {
            $data->{'label'} = $object->getLabel();
        }
        if (null !== $object->getIsPrepaid()) {
            $data->{'is_prepaid'} = $object->getIsPrepaid();
        }
        if (null !== $object->getIssuers()) {
            $values = [];
            foreach ($object->getIssuers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'issuers'} = $values;
        }
        if (null !== $object->getIsEnabled()) {
            $data->{'is_enabled'} = $object->getIsEnabled();
        }
        if (null !== $object->getIsDeferred()) {
            $data->{'is_deferred'} = $object->getIsDeferred();
        }

        return $data;
    }
}
