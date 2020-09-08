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

class CntDataflowModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntDataflowModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntDataflowModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntDataflowModel();
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'source') && null !== $data->{'source'}) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'type') && null !== $data->{'type'}) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'trigger') && null !== $data->{'trigger'}) {
            $object->setTrigger($this->denormalizer->denormalize($data->{'trigger'}, 'Afosto\\Sdk\\Model\\CntDataflowModelTrigger', 'json', $context));
        }
        if (property_exists($data, 'config') && null !== $data->{'config'}) {
            $object->setConfig($data->{'config'});
        }
        if (property_exists($data, 'secret') && null !== $data->{'secret'}) {
            $object->setSecret($data->{'secret'});
        }
        if (property_exists($data, 'filter') && null !== $data->{'filter'}) {
            $values = [];
            foreach ($data->{'filter'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\CntDataflowFilter', 'json', $context);
            }
            $object->setFilter($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getTrigger()) {
            $data->{'trigger'} = $this->normalizer->normalize($object->getTrigger(), 'json', $context);
        }
        if (null !== $object->getConfig()) {
            $data->{'config'} = $object->getConfig();
        }
        if (null !== $object->getSecret()) {
            $data->{'secret'} = $object->getSecret();
        }
        if (null !== $object->getFilter()) {
            $values = [];
            foreach ($object->getFilter() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'filter'} = $values;
        }

        return $data;
    }
}
