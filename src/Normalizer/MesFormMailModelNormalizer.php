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

class MesFormMailModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Afosto\\Sdk\\Model\\MesFormMailModel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Afosto\\Sdk\\Model\\MesFormMailModel' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Afosto\Sdk\Model\MesFormMailModel();
        if (property_exists($data, 'from') && null !== $data->{'from'}) {
            $object->setFrom($this->denormalizer->denormalize($data->{'from'}, 'Afosto\\Sdk\\Model\\MesContactModel', 'json', $context));
        }
        if (property_exists($data, 'to') && null !== $data->{'to'}) {
            $values = [];
            foreach ($data->{'to'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Afosto\\Sdk\\Model\\MesContactModel', 'json', $context);
            }
            $object->setTo($values);
        }
        if (property_exists($data, 'cc') && null !== $data->{'cc'}) {
            $values_1 = [];
            foreach ($data->{'cc'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Afosto\\Sdk\\Model\\MesContactModel', 'json', $context);
            }
            $object->setCc($values_1);
        }
        if (property_exists($data, 'bcc') && null !== $data->{'bcc'}) {
            $values_2 = [];
            foreach ($data->{'bcc'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Afosto\\Sdk\\Model\\MesContactModel', 'json', $context);
            }
            $object->setBcc($values_2);
        }
        if (property_exists($data, 'reply_to') && null !== $data->{'reply_to'}) {
            $object->setReplyTo($this->denormalizer->denormalize($data->{'reply_to'}, 'Afosto\\Sdk\\Model\\MesContactModel', 'json', $context));
        }
        if (property_exists($data, 'recaptcha_response') && null !== $data->{'recaptcha_response'}) {
            $object->setRecaptchaResponse($data->{'recaptcha_response'});
        }
        if (property_exists($data, 'subject') && null !== $data->{'subject'}) {
            $object->setSubject($data->{'subject'});
        }
        if (property_exists($data, 'html_body') && null !== $data->{'html_body'}) {
            $object->setHtmlBody($data->{'html_body'});
        }
        if (property_exists($data, 'attachments') && null !== $data->{'attachments'}) {
            $values_3 = [];
            foreach ($data->{'attachments'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setAttachments($values_3);
        }
        if (property_exists($data, 'folder') && null !== $data->{'folder'}) {
            $object->setFolder($data->{'folder'});
        }
        if (property_exists($data, 'is_unread') && null !== $data->{'is_unread'}) {
            $object->setIsUnread($data->{'is_unread'});
        }
        if (property_exists($data, 'metadata') && null !== $data->{'metadata'}) {
            $object->setMetadata($data->{'metadata'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFrom()) {
            $data->{'from'} = $this->normalizer->normalize($object->getFrom(), 'json', $context);
        }
        if (null !== $object->getTo()) {
            $values = [];
            foreach ($object->getTo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'to'} = $values;
        }
        if (null !== $object->getCc()) {
            $values_1 = [];
            foreach ($object->getCc() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'cc'} = $values_1;
        }
        if (null !== $object->getBcc()) {
            $values_2 = [];
            foreach ($object->getBcc() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'bcc'} = $values_2;
        }
        if (null !== $object->getReplyTo()) {
            $data->{'reply_to'} = $this->normalizer->normalize($object->getReplyTo(), 'json', $context);
        }
        if (null !== $object->getRecaptchaResponse()) {
            $data->{'recaptcha_response'} = $object->getRecaptchaResponse();
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }
        if (null !== $object->getHtmlBody()) {
            $data->{'html_body'} = $object->getHtmlBody();
        }
        if (null !== $object->getAttachments()) {
            $values_3 = [];
            foreach ($object->getAttachments() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'attachments'} = $values_3;
        }
        if (null !== $object->getFolder()) {
            $data->{'folder'} = $object->getFolder();
        }
        if (null !== $object->getIsUnread()) {
            $data->{'is_unread'} = $object->getIsUnread();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }

        return $data;
    }
}
