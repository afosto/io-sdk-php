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

class WmsCreateTransferRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\WmsCreateTransferRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\WmsCreateTransferRequest';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsCreateTransferRequest();
        if (property_exists($data, 'to') && $data->{'to'} !== null) {
            $object->setTo($data->{'to'});
        }
        if (property_exists($data, 'collect_at') && $data->{'collect_at'} !== null) {
            $object->setCollectAt($data->{'collect_at'});
        }
        if (property_exists($data, 'claims') && $data->{'claims'} !== null) {
            $values = [];
            foreach ($data->{'claims'} as $value) {
                $values[] = $value;
            }
            $object->setClaims($values);
        }
        if (property_exists($data, 'expected_at') && $data->{'expected_at'} !== null) {
            $object->setExpectedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expected_at'}));
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updated_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTo()) {
            $data->{'to'} = $object->getTo();
        }
        if (null !== $object->getCollectAt()) {
            $data->{'collect_at'} = $object->getCollectAt();
        }
        if (null !== $object->getClaims()) {
            $values = [];
            foreach ($object->getClaims() as $value) {
                $values[] = $value;
            }
            $data->{'claims'} = $values;
        }
        if (null !== $object->getExpectedAt()) {
            $data->{'expected_at'} = $object->getExpectedAt()->format("Y-m-d\TH:i:sP");
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
