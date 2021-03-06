<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class DeleteSecret extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $type;

    /**
     * Delete the secret and disable 2FA.
     *
     * @param string $type Type that needs to be deleted
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{type}'], [$this->type], '/iam/2fa/secrets/{type}');
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
     * @throws \Afosto\Sdk\Exception\DeleteSecretBadRequestException
     * @throws \Afosto\Sdk\Exception\DeleteSecretUnauthorizedException
     * @throws \Afosto\Sdk\Exception\DeleteSecretNotFoundException
     * @throws \Afosto\Sdk\Exception\DeleteSecretForbiddenException
     * @throws \Afosto\Sdk\Exception\DeleteSecretInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\DeleteSecretServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\IamSecretRead|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\IamSecretRead', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteSecretBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteSecretUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteSecretNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteSecretForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteSecretInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteSecretServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
