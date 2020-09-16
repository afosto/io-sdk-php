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

class OdrOrdersIdItemsAttachPostBodyItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\OdrOrdersIdItemsAttachPostBodyItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\OdrOrdersIdItemsAttachPostBodyItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\OdrOrdersIdItemsAttachPostBodyItem();
        if (property_exists($data, 'order_item_id') && null !== $data->{'order_item_id'}) {
            $object->setOrderItemId($data->{'order_item_id'});
        }
        if (property_exists($data, 'inventory_item_id') && null !== $data->{'inventory_item_id'}) {
            $object->setInventoryItemId($data->{'inventory_item_id'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOrderItemId()) {
            $data->{'order_item_id'} = $object->getOrderItemId();
        }
        if (null !== $object->getInventoryItemId()) {
            $data->{'inventory_item_id'} = $object->getInventoryItemId();
        }

        return $data;
    }
}
