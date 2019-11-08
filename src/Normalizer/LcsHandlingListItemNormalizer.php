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

class LcsHandlingListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\LcsHandlingListItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\LcsHandlingListItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsHandlingListItem();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'shipment_id') && $data->{'shipment_id'} !== null) {
            $object->setShipmentId($data->{'shipment_id'});
        }
        if (property_exists($data, 'sku') && $data->{'sku'} !== null) {
            $object->setSku($data->{'sku'});
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'postition') && $data->{'postition'} !== null) {
            $object->setPostition($data->{'postition'});
        }
        if (property_exists($data, 'is_handled') && $data->{'is_handled'} !== null) {
            $object->setIsHandled($data->{'is_handled'});
        }
        if (property_exists($data, 'is_serviced') && $data->{'is_serviced'} !== null) {
            $object->setIsServiced($data->{'is_serviced'});
        }
        if (property_exists($data, 'service') && $data->{'service'} !== null) {
            $values = [];
            foreach ($data->{'service'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\LcsServiceOption', 'json', $context);
            }
            $object->setService($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getShipmentId()) {
            $data->{'shipment_id'} = $object->getShipmentId();
        }
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getPostition()) {
            $data->{'postition'} = $object->getPostition();
        }
        if (null !== $object->getIsHandled()) {
            $data->{'is_handled'} = $object->getIsHandled();
        }
        if (null !== $object->getIsServiced()) {
            $data->{'is_serviced'} = $object->getIsServiced();
        }
        if (null !== $object->getService()) {
            $values = [];
            foreach ($object->getService() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'service'} = $values;
        }

        return $data;
    }
}