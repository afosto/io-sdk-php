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

class CntProxyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntProxy' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntProxy' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntProxy();
        if (property_exists($data, 'key') && null !== $data->{'key'}) {
            $object->setKey($data->{'key'});
        }
        if (property_exists($data, 'origin') && null !== $data->{'origin'}) {
            $object->setOrigin($data->{'origin'});
        }
        if (property_exists($data, 'config') && null !== $data->{'config'}) {
            $object->setConfig($this->denormalizer->denormalize($data->{'config'}, 'Afosto\\Sdk\\Model\\CntConfig', 'json', $context));
        }
        if (property_exists($data, 'secret') && null !== $data->{'secret'}) {
            $object->setSecret($data->{'secret'});
        }
        if (property_exists($data, 'tenant_id') && null !== $data->{'tenant_id'}) {
            $object->setTenantId($data->{'tenant_id'});
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
        if (null !== $object->getKey()) {
            $data->{'key'} = $object->getKey();
        }
        if (null !== $object->getOrigin()) {
            $data->{'origin'} = $object->getOrigin();
        }
        if (null !== $object->getConfig()) {
            $data->{'config'} = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getSecret()) {
            $data->{'secret'} = $object->getSecret();
        }
        if (null !== $object->getTenantId()) {
            $data->{'tenant_id'} = $object->getTenantId();
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
