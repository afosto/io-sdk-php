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

class WmsSortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\WmsSort' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\WmsSort' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\WmsSort();
        if (property_exists($data, 'order') && null !== $data->{'order'}) {
            $object->setOrder($data->{'order'});
        }
        if (property_exists($data, 'by') && null !== $data->{'by'}) {
            $object->setBy($data->{'by'});
        }
        if (property_exists($data, 'list') && null !== $data->{'list'}) {
            $values = [];
            foreach ($data->{'list'} as $value) {
                $values[] = $value;
            }
            $object->setList($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOrder()) {
            $data->{'order'} = $object->getOrder();
        }
        if (null !== $object->getBy()) {
            $data->{'by'} = $object->getBy();
        }
        if (null !== $object->getList()) {
            $values = [];
            foreach ($object->getList() as $value) {
                $values[] = $value;
            }
            $data->{'list'} = $values;
        }

        return $data;
    }
}
