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

class AppIntegrationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\AppIntegration' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\AppIntegration' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\AppIntegration();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'configuration') && null !== $data->{'configuration'}) {
            $object->setConfiguration($data->{'configuration'});
        }
        if (property_exists($data, 'app_code') && null !== $data->{'app_code'}) {
            $object->setAppCode($data->{'app_code'});
        }
        if (property_exists($data, 'is_installed') && null !== $data->{'is_installed'}) {
            $object->setIsInstalled($data->{'is_installed'});
        }
        if (property_exists($data, 'active_at') && null !== $data->{'active_at'}) {
            $object->setActiveAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'active_at'}));
        }
        if (property_exists($data, 'deleted_at') && null !== $data->{'deleted_at'}) {
            $object->setDeletedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'deleted_at'}));
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
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getConfiguration()) {
            $data->{'configuration'} = $object->getConfiguration();
        }
        if (null !== $object->getAppCode()) {
            $data->{'app_code'} = $object->getAppCode();
        }
        if (null !== $object->getIsInstalled()) {
            $data->{'is_installed'} = $object->getIsInstalled();
        }
        if (null !== $object->getActiveAt()) {
            $data->{'active_at'} = $object->getActiveAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getDeletedAt()) {
            $data->{'deleted_at'} = $object->getDeletedAt()->format("Y-m-d\TH:i:sP");
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