<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class GetProfile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $path;

    /**
     * Get the profiles by its key.
     *
     * @param string $path The correlationID of a configuration where we are updating the configuration off
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{path}'], [$this->path], '/iam/profiles/{path}');
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
     * @throws \Afosto\Sdk\Exception\GetProfileForbiddenException
     * @throws \Afosto\Sdk\Exception\GetProfileNotFoundException
     * @throws \Afosto\Sdk\Exception\GetProfileBadRequestException
     * @throws \Afosto\Sdk\Exception\GetProfileUnauthorizedException
     * @throws \Afosto\Sdk\Exception\GetProfileInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\GetProfileServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (204 === $status) {
            return json_decode($body);
        }
        if (206 === $status) {
            return json_decode($body);
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\GetProfileForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error[]', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\GetProfileNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error[]', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\GetProfileBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\GetProfileUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\GetProfileInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\GetProfileServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
