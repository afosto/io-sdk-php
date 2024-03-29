<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class GetSessionPhonenumber extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;

    /**
     * Returns the primary phonenumber of the customer.
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/odr/sessions/{id}/phonenumbers');
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
     * @throws \Afosto\Sdk\Exception\GetSessionPhonenumberBadRequestException
     * @throws \Afosto\Sdk\Exception\GetSessionPhonenumberUnauthorizedException
     * @throws \Afosto\Sdk\Exception\GetSessionPhonenumberForbiddenException
     * @throws \Afosto\Sdk\Exception\GetSessionPhonenumberNotFoundException
     * @throws \Afosto\Sdk\Exception\GetSessionPhonenumberInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\GetSessionPhonenumberServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\OdrSessionsIdPhonenumbersGetResponse200|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\OdrSessionsIdPhonenumbersGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\GetSessionPhonenumberBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\GetSessionPhonenumberUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\GetSessionPhonenumberForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\GetSessionPhonenumberNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\GetSessionPhonenumberInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\GetSessionPhonenumberServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
