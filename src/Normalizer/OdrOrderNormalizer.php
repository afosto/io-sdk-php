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

class OdrOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrOrder' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrOrder' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrOrder();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'number') && null !== $data->{'number'}) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'state') && null !== $data->{'state'}) {
            $object->setState($this->denormalizer->denormalize($data->{'state'}, 'Afosto\\Sdk\\Model\\OdrOrderState', 'json', $context));
        }
        if (property_exists($data, 'settings') && null !== $data->{'settings'}) {
            $object->setSettings($this->denormalizer->denormalize($data->{'settings'}, 'Afosto\\Sdk\\Model\\OdrOrderSettings', 'json', $context));
        }
        if (property_exists($data, 'processing') && null !== $data->{'processing'}) {
            $object->setProcessing($this->denormalizer->denormalize($data->{'processing'}, 'Afosto\\Sdk\\Model\\OdrProcessing', 'json', $context));
        }
        if (property_exists($data, 'acceptances') && null !== $data->{'acceptances'}) {
            $values = [];
            foreach ($data->{'acceptances'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\OdrOrderAcceptances', 'json', $context);
            }
            $object->setAcceptances($values);
        }
        if (property_exists($data, 'calculations') && null !== $data->{'calculations'}) {
            $values_1 = [];
            foreach ($data->{'calculations'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\OdrOrderCalculations', 'json', $context);
            }
            $object->setCalculations($values_1);
        }
        if (property_exists($data, 'client_id') && null !== $data->{'client_id'}) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'channel_id') && null !== $data->{'channel_id'}) {
            $object->setChannelId($data->{'channel_id'});
        }
        if (property_exists($data, 'tags') && null !== $data->{'tags'}) {
            $values_2 = [];
            foreach ($data->{'tags'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTags($values_2);
        }
        if (property_exists($data, 'stack_id') && null !== $data->{'stack_id'}) {
            $object->setStackId($data->{'stack_id'});
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'last_accepted_at') && null !== $data->{'last_accepted_at'}) {
            $object->setLastAcceptedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'last_accepted_at'}));
        }
        if (property_exists($data, 'last_confirmed_at') && null !== $data->{'last_confirmed_at'}) {
            $object->setLastConfirmedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'last_confirmed_at'}));
        }
        if (property_exists($data, 'last_canceled_at') && null !== $data->{'last_canceled_at'}) {
            $object->setLastCanceledAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'last_canceled_at'}));
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
        if (null !== $object->getState()) {
            $data->{'state'} = $this->normalizer->normalize($object->getState(), 'json', $context);
        }
        if (null !== $object->getSettings()) {
            $data->{'settings'} = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        }
        if (null !== $object->getProcessing()) {
            $data->{'processing'} = $this->normalizer->normalize($object->getProcessing(), 'json', $context);
        }
        if (null !== $object->getAcceptances()) {
            $values = [];
            foreach ($object->getAcceptances() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'acceptances'} = $values;
        }
        if (null !== $object->getCalculations()) {
            $values_1 = [];
            foreach ($object->getCalculations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'calculations'} = $values_1;
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        if (null !== $object->getChannelId()) {
            $data->{'channel_id'} = $object->getChannelId();
        }
        if (null !== $object->getTags()) {
            $values_2 = [];
            foreach ($object->getTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'tags'} = $values_2;
        }
        if (null !== $object->getStackId()) {
            $data->{'stack_id'} = $object->getStackId();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getLastAcceptedAt()) {
            $data->{'last_accepted_at'} = $object->getLastAcceptedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getLastConfirmedAt()) {
            $data->{'last_confirmed_at'} = $object->getLastConfirmedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getLastCanceledAt()) {
            $data->{'last_canceled_at'} = $object->getLastCanceledAt()->format("Y-m-d\TH:i:sP");
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
