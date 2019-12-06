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

class IamLogsFiltersGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\IamLogsFiltersGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\IamLogsFiltersGetResponse200' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\IamLogsFiltersGetResponse200();
        if (property_exists($data, 'resource') && null !== $data->{'resource'}) {
            $values = [];
            foreach ($data->{'resource'} as $value) {
                $values[] = $value;
            }
            $object->setResource($values);
        }
        if (property_exists($data, 'method') && null !== $data->{'method'}) {
            $values_1 = [];
            foreach ($data->{'method'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setMethod($values_1);
        }
        if (property_exists($data, 'user') && null !== $data->{'user'}) {
            $values_2 = [];
            foreach ($data->{'user'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setUser($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getResource()) {
            $values = [];
            foreach ($object->getResource() as $value) {
                $values[] = $value;
            }
            $data->{'resource'} = $values;
        }
        if (null !== $object->getMethod()) {
            $values_1 = [];
            foreach ($object->getMethod() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'method'} = $values_1;
        }
        if (null !== $object->getUser()) {
            $values_2 = [];
            foreach ($object->getUser() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'user'} = $values_2;
        }

        return $data;
    }
}
