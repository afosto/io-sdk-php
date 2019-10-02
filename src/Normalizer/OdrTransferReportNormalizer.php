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

class OdrTransferReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Afosto\\Sdk\\Model\\OdrTransferReport';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Afosto\\Sdk\\Model\\OdrTransferReport';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrTransferReport();
        if (property_exists($data, 'location_id') && $data->{'location_id'} !== null) {
            $object->setLocationId($data->{'location_id'});
        }
        if (property_exists($data, 'claim_item_ids') && $data->{'claim_item_ids'} !== null) {
            $values = [];
            foreach ($data->{'claim_item_ids'} as $value) {
                $values[] = $value;
            }
            $object->setClaimItemIds($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLocationId()) {
            $data->{'location_id'} = $object->getLocationId();
        }
        if (null !== $object->getClaimItemIds()) {
            $values = [];
            foreach ($object->getClaimItemIds() as $value) {
                $values[] = $value;
            }
            $data->{'claim_item_ids'} = $values;
        }

        return $data;
    }
}