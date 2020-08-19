<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class MarkPaymentAsPaid extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $secret;

    /**
     * Marks a payment as paid.
     */
    public function __construct(string $secret)
    {
        $this->secret = $secret;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{secret}'], [$this->secret], '/odr/payments/{secret}/paid');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\MarkPaymentAsPaidBadRequestException
     * @throws \Afosto\Sdk\Exception\MarkPaymentAsPaidUnauthorizedException
     * @throws \Afosto\Sdk\Exception\MarkPaymentAsPaidForbiddenException
     * @throws \Afosto\Sdk\Exception\MarkPaymentAsPaidNotFoundException
     * @throws \Afosto\Sdk\Exception\MarkPaymentAsPaidInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\MarkPaymentAsPaidServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\OdrPayment|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\OdrPayment', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\MarkPaymentAsPaidBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\MarkPaymentAsPaidUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\MarkPaymentAsPaidForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\MarkPaymentAsPaidNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\MarkPaymentAsPaidInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\MarkPaymentAsPaidServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
