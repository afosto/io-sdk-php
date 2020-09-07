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

class CntFiltersDateGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntFiltersDateGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntFiltersDateGetResponse200' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntFiltersDateGetResponse200();
        if (property_exists($data, 'query') && null !== $data->{'query'}) {
            $object->setQuery($this->denormalizer->denormalize($data->{'query'}, 'Afosto\\Sdk\\Model\\CntRelativeDate', 'json', $context));
        }
        if (property_exists($data, 'epoch') && null !== $data->{'epoch'}) {
            $object->setEpoch($data->{'epoch'});
        }
        if (property_exists($data, 'formatted') && null !== $data->{'formatted'}) {
            $object->setFormatted(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'formatted'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getQuery()) {
            $data->{'query'} = $this->normalizer->normalize($object->getQuery(), 'json', $context);
        }
        if (null !== $object->getEpoch()) {
            $data->{'epoch'} = $object->getEpoch();
        }
        if (null !== $object->getFormatted()) {
            $data->{'formatted'} = $object->getFormatted()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
