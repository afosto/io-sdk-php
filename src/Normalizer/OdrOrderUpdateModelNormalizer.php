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

class OdrOrderUpdateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrOrderUpdateModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrOrderUpdateModel';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrOrderUpdateModel();
        if (property_exists($data, 'address_set_id') && $data->{'address_set_id'} !== null) {
            $object->setAddressSetId($data->{'address_set_id'});
        }
        if (property_exists($data, 'metadata') && $data->{'metadata'} !== null) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'due_at') && $data->{'due_at'} !== null) {
            $object->setDueAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'due_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddressSetId()) {
            $data->{'address_set_id'} = $object->getAddressSetId();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getDueAt()) {
            $data->{'due_at'} = $object->getDueAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
