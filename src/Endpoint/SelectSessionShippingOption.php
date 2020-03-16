<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class SelectSessionShippingOption extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $secret;

    /**
     * Select a shipping option used for the session.
     */
    public function __construct(string $secret, \Afosto\Sdk\Model\OdrSelectSessionServicePointRequest $body)
    {
        $this->secret = $secret;
        $this->body = $body;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{secret}'], [$this->secret], '/odr/sessions/{secret}/shipping');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\SelectSessionShippingOptionBadRequestException
     * @throws \Afosto\Sdk\Exception\SelectSessionShippingOptionUnauthorizedException
     * @throws \Afosto\Sdk\Exception\SelectSessionShippingOptionForbiddenException
     * @throws \Afosto\Sdk\Exception\SelectSessionShippingOptionNotFoundException
     * @throws \Afosto\Sdk\Exception\SelectSessionShippingOptionInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\SelectSessionShippingOptionServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\OdrSelectSessionServicePointRequest|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\OdrSelectSessionServicePointRequest', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionShippingOptionBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionShippingOptionUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionShippingOptionForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionShippingOptionNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionShippingOptionInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionShippingOptionServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
