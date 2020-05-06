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

class LcsParcelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsParcel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\LcsParcel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsParcel();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'number') && null !== $data->{'number'}) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'weight') && null !== $data->{'weight'}) {
            $object->setWeight($data->{'weight'});
        }
        if (property_exists($data, 'length') && null !== $data->{'length'}) {
            $object->setLength($data->{'length'});
        }
        if (property_exists($data, 'width') && null !== $data->{'width'}) {
            $object->setWidth($data->{'width'});
        }
        if (property_exists($data, 'height') && null !== $data->{'height'}) {
            $object->setHeight($data->{'height'});
        }
        if (property_exists($data, 'tracking_code') && null !== $data->{'tracking_code'}) {
            $object->setTrackingCode($data->{'tracking_code'});
        }
        if (property_exists($data, 'tracking_url') && null !== $data->{'tracking_url'}) {
            $object->setTrackingUrl($data->{'tracking_url'});
        }
        if (property_exists($data, 'label') && null !== $data->{'label'}) {
            $object->setLabel($this->denormalizer->denormalize($data->{'label'}, 'Afosto\\Sdk\\Model\\LcsParcelLabel', 'json', $context));
        }
        if (property_exists($data, 'stack_id') && null !== $data->{'stack_id'}) {
            $object->setStackId($data->{'stack_id'});
        }
        if (property_exists($data, 'items') && null !== $data->{'items'}) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\LcsParcelItem', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'is_delivered') && null !== $data->{'is_delivered'}) {
            $object->setIsDelivered($data->{'is_delivered'});
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
        if (null !== $object->getNumber()) {
            $data->{'number'} = $object->getNumber();
        }
        if (null !== $object->getWeight()) {
            $data->{'weight'} = $object->getWeight();
        }
        if (null !== $object->getLength()) {
            $data->{'length'} = $object->getLength();
        }
        if (null !== $object->getWidth()) {
            $data->{'width'} = $object->getWidth();
        }
        if (null !== $object->getHeight()) {
            $data->{'height'} = $object->getHeight();
        }
        if (null !== $object->getTrackingCode()) {
            $data->{'tracking_code'} = $object->getTrackingCode();
        }
        if (null !== $object->getTrackingUrl()) {
            $data->{'tracking_url'} = $object->getTrackingUrl();
        }
        if (null !== $object->getLabel()) {
            $data->{'label'} = $this->normalizer->normalize($object->getLabel(), 'json', $context);
        }
        if (null !== $object->getStackId()) {
            $data->{'stack_id'} = $object->getStackId();
        }
        if (null !== $object->getItems()) {
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'items'} = $values;
        }
        if (null !== $object->getIsDelivered()) {
            $data->{'is_delivered'} = $object->getIsDelivered();
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
