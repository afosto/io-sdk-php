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
        return 'Afosto\\Sdk\\Model\\WmsCreateTransferRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\WmsCreateTransferRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsCreateTransferRequest();
        if (property_exists($data, 'target') && null !== $data->{'target'}) {
            $object->setTarget($data->{'target'});
        }
        if (property_exists($data, 'arrival_at') && null !== $data->{'arrival_at'}) {
            $object->setArrivalAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'arrival_at'}));
        }
        if (property_exists($data, 'collect_at') && null !== $data->{'collect_at'}) {
            $object->setCollectAt($data->{'collect_at'});
        }
        if (property_exists($data, 'routing') && null !== $data->{'routing'}) {
            $values = [];
            foreach ($data->{'routing'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\WmsCreateTransferRequestRoutingItem', 'json', $context);
            }
            $object->setRouting($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTarget()) {
            $data->{'target'} = $object->getTarget();
        }
        if (null !== $object->getArrivalAt()) {
            $data->{'arrival_at'} = $object->getArrivalAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getCollectAt()) {
            $data->{'collect_at'} = $object->getCollectAt();
        }
        if (null !== $object->getRouting()) {
            $values = [];
            foreach ($object->getRouting() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'routing'} = $values;
        }

        return $data;
    }
}
