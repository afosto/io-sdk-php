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

class LcsHandlingListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsHandlingList' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\LcsHandlingList' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\LcsHandlingList();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'number') && null !== $data->{'number'}) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'sub') && null !== $data->{'sub'}) {
            $object->setSub($data->{'sub'});
        }
        if (property_exists($data, 'location_id') && null !== $data->{'location_id'}) {
            $object->setLocationId($data->{'location_id'});
        }
        if (property_exists($data, 'shipments') && null !== $data->{'shipments'}) {
            $values = [];
            foreach ($data->{'shipments'} as $value) {
                $values[] = $value;
            }
            $object->setShipments($values);
        }
        if (property_exists($data, 'is_outbound') && null !== $data->{'is_outbound'}) {
            $object->setIsOutbound($data->{'is_outbound'});
        }
        if (property_exists($data, 'is_in_progress') && null !== $data->{'is_in_progress'}) {
            $object->setIsInProgress($data->{'is_in_progress'});
        }
        if (property_exists($data, 'is_on_hold') && null !== $data->{'is_on_hold'}) {
            $object->setIsOnHold($data->{'is_on_hold'});
        }
        if (property_exists($data, 'is_cancelled') && null !== $data->{'is_cancelled'}) {
            $object->setIsCancelled($data->{'is_cancelled'});
        }
        if (property_exists($data, 'is_finished') && null !== $data->{'is_finished'}) {
            $object->setIsFinished($data->{'is_finished'});
        }
        if (property_exists($data, 'started_at') && null !== $data->{'started_at'}) {
            $object->setStartedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'started_at'}));
        }
        if (property_exists($data, 'finished_at') && null !== $data->{'finished_at'}) {
            $object->setFinishedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'finished_at'}));
        }
        if (property_exists($data, 'due_at') && null !== $data->{'due_at'}) {
            $object->setDueAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'due_at'}));
        }
        if (property_exists($data, 'items') && null !== $data->{'items'}) {
            $values_1 = [];
            foreach ($data->{'items'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\LcsHandlingListItem', 'json', $context);
            }
            $object->setItems($values_1);
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
        if (null !== $object->getSub()) {
            $data->{'sub'} = $object->getSub();
        }
        if (null !== $object->getLocationId()) {
            $data->{'location_id'} = $object->getLocationId();
        }
        if (null !== $object->getShipments()) {
            $values = [];
            foreach ($object->getShipments() as $value) {
                $values[] = $value;
            }
            $data->{'shipments'} = $values;
        }
        if (null !== $object->getIsOutbound()) {
            $data->{'is_outbound'} = $object->getIsOutbound();
        }
        if (null !== $object->getIsInProgress()) {
            $data->{'is_in_progress'} = $object->getIsInProgress();
        }
        if (null !== $object->getIsOnHold()) {
            $data->{'is_on_hold'} = $object->getIsOnHold();
        }
        if (null !== $object->getIsCancelled()) {
            $data->{'is_cancelled'} = $object->getIsCancelled();
        }
        if (null !== $object->getIsFinished()) {
            $data->{'is_finished'} = $object->getIsFinished();
        }
        if (null !== $object->getStartedAt()) {
            $data->{'started_at'} = $object->getStartedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getFinishedAt()) {
            $data->{'finished_at'} = $object->getFinishedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getDueAt()) {
            $data->{'due_at'} = $object->getDueAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getItems()) {
            $values_1 = [];
            foreach ($object->getItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'items'} = $values_1;
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
