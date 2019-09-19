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

class OdrClaimCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrClaimCreate';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrClaimCreate';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrClaimCreate();
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'target') && $data->{'target'} !== null) {
            $object->setTarget($data->{'target'});
        }
        if (property_exists($data, 'stack') && $data->{'stack'} !== null) {
            $object->setStack($this->denormalizer->denormalize($data->{'stack'}, 'Afosto\\Sdk\\Model\\OdrStackReference', 'json', $context));
        }
        if (property_exists($data, 'warehouses') && $data->{'warehouses'} !== null) {
            $values = [];
            foreach ($data->{'warehouses'} as $value) {
                $values[] = $value;
            }
            $object->setWarehouses($values);
        }
        if (property_exists($data, 'expires_at') && $data->{'expires_at'} !== null) {
            $object->setExpiresAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expires_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getTarget()) {
            $data->{'target'} = $object->getTarget();
        }
        if (null !== $object->getStack()) {
            $data->{'stack'} = $this->normalizer->normalize($object->getStack(), 'json', $context);
        }
        if (null !== $object->getWarehouses()) {
            $values = [];
            foreach ($object->getWarehouses() as $value) {
                $values[] = $value;
            }
            $data->{'warehouses'} = $values;
        }
        if (null !== $object->getExpiresAt()) {
            $data->{'expires_at'} = $object->getExpiresAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
