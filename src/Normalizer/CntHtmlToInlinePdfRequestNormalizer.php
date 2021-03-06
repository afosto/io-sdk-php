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

class CntHtmlToInlinePdfRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\CntHtmlToInlinePdfRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\CntHtmlToInlinePdfRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\CntHtmlToInlinePdfRequest();
        if (property_exists($data, 'size') && null !== $data->{'size'}) {
            $object->setSize($this->denormalizer->denormalize($data->{'size'}, 'Afosto\\Sdk\\Model\\CntHtmlToInlinePdfRequestSize', 'json', $context));
        }
        if (property_exists($data, 'margin') && null !== $data->{'margin'}) {
            $object->setMargin($this->denormalizer->denormalize($data->{'margin'}, 'Afosto\\Sdk\\Model\\CntHtmlToInlinePdfRequestMargin', 'json', $context));
        }
        if (property_exists($data, 'content') && null !== $data->{'content'}) {
            $object->setContent($data->{'content'});
        }
        if (property_exists($data, 'wait_delay') && null !== $data->{'wait_delay'}) {
            $object->setWaitDelay($data->{'wait_delay'});
        }
        if (property_exists($data, 'wait_timeout') && null !== $data->{'wait_timeout'}) {
            $object->setWaitTimeout($data->{'wait_timeout'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSize()) {
            $data->{'size'} = $this->normalizer->normalize($object->getSize(), 'json', $context);
        }
        if (null !== $object->getMargin()) {
            $data->{'margin'} = $this->normalizer->normalize($object->getMargin(), 'json', $context);
        }
        if (null !== $object->getContent()) {
            $data->{'content'} = $object->getContent();
        }
        if (null !== $object->getWaitDelay()) {
            $data->{'wait_delay'} = $object->getWaitDelay();
        }
        if (null !== $object->getWaitTimeout()) {
            $data->{'wait_timeout'} = $object->getWaitTimeout();
        }

        return $data;
    }
}
