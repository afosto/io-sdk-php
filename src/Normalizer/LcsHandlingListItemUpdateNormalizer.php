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

class LcsHandlingListItemUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\LcsHandlingListItemUpdate';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\LcsHandlingListItemUpdate';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsHandlingListItemUpdate();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'is_handled') && $data->{'is_handled'} !== null) {
            $object->setIsHandled($data->{'is_handled'});
        }
        if (property_exists($data, 'is_serviced') && $data->{'is_serviced'} !== null) {
            $object->setIsServiced($data->{'is_serviced'});
        }
        if (property_exists($data, 'position') && $data->{'position'} !== null) {
            $object->setPosition($data->{'position'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsHandled()) {
            $data->{'is_handled'} = $object->getIsHandled();
        }
        if (null !== $object->getIsServiced()) {
            $data->{'is_serviced'} = $object->getIsServiced();
        }
        if (null !== $object->getPosition()) {
            $data->{'position'} = $object->getPosition();
        }

        return $data;
    }
}
