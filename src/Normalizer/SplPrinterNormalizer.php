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

class SplPrinterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\SplPrinter' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\SplPrinter' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\SplPrinter();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'hub_id') && null !== $data->{'hub_id'}) {
            $object->setHubId($data->{'hub_id'});
        }
        if (property_exists($data, 'default_encoding') && null !== $data->{'default_encoding'}) {
            $object->setDefaultEncoding($data->{'default_encoding'});
        }
        if (property_exists($data, 'connection') && null !== $data->{'connection'}) {
            $object->setConnection($this->denormalizer->denormalize($data->{'connection'}, 'Afosto\\Sdk\\Model\\SplConnection', 'json', $context));
        }
        if (property_exists($data, 'settings') && null !== $data->{'settings'}) {
            $object->setSettings($data->{'settings'});
        }
        if (property_exists($data, 'inbox_id') && null !== $data->{'inbox_id'}) {
            $object->setInboxId($data->{'inbox_id'});
        }
        if (property_exists($data, 'disabled_at') && null !== $data->{'disabled_at'}) {
            $object->setDisabledAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'disabled_at'}));
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
        if (null !== $object->getHubId()) {
            $data->{'hub_id'} = $object->getHubId();
        }
        if (null !== $object->getDefaultEncoding()) {
            $data->{'default_encoding'} = $object->getDefaultEncoding();
        }
        if (null !== $object->getConnection()) {
            $data->{'connection'} = $this->normalizer->normalize($object->getConnection(), 'json', $context);
        }
        if (null !== $object->getSettings()) {
            $data->{'settings'} = $object->getSettings();
        }
        if (null !== $object->getInboxId()) {
            $data->{'inbox_id'} = $object->getInboxId();
        }
        if (null !== $object->getDisabledAt()) {
            $data->{'disabled_at'} = $object->getDisabledAt()->format("Y-m-d\TH:i:sP");
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
