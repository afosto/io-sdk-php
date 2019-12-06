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

class RelOrganisationListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelOrganisationList' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelOrganisationList' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\RelOrganisationList();
        if (property_exists($data, 'primary') && null !== $data->{'primary'}) {
            $object->setPrimary($this->denormalizer->denormalize($data->{'primary'}, 'Afosto\\Sdk\\Model\\RelOrganisation', 'json', $context));
        }
        if (property_exists($data, 'secondary') && null !== $data->{'secondary'}) {
            $values = [];
            foreach ($data->{'secondary'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\RelOrganisation', 'json', $context);
            }
            $object->setSecondary($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPrimary()) {
            $data->{'primary'} = $this->normalizer->normalize($object->getPrimary(), 'json', $context);
        }
        if (null !== $object->getSecondary()) {
            $values = [];
            foreach ($object->getSecondary() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'secondary'} = $values;
        }

        return $data;
    }
}
