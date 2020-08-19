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

class RelOrganisationUpdateModelBillingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\RelOrganisationUpdateModelBilling' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\RelOrganisationUpdateModelBilling' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\RelOrganisationUpdateModelBilling();
        if (property_exists($data, 'primary') && null !== $data->{'primary'}) {
            $object->setPrimary($data->{'primary'});
        }
        if (property_exists($data, 'secondary') && null !== $data->{'secondary'}) {
            $values = [];
            foreach ($data->{'secondary'} as $value) {
                $values[] = $value;
            }
            $object->setSecondary($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPrimary()) {
            $data->{'primary'} = $object->getPrimary();
        }
        if (null !== $object->getSecondary()) {
            $values = [];
            foreach ($object->getSecondary() as $value) {
                $values[] = $value;
            }
            $data->{'secondary'} = $values;
        }

        return $data;
    }
}
