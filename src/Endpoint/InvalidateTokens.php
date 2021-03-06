<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class InvalidateTokens extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Invalidate all pending tokens of given type for user.
     *
     * @param \Afosto\Sdk\Model\IamUserTokenRequest $body Request reset object
     */
    public function __construct(\Afosto\Sdk\Model\IamUserTokenRequest $body)
    {
        $this->body = $body;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/iam/users/tokens/invalidate';
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
     * @throws \Afosto\Sdk\Exception\InvalidateTokensUnauthorizedException
     * @throws \Afosto\Sdk\Exception\InvalidateTokensNotFoundException
     * @throws \Afosto\Sdk\Exception\InvalidateTokensBadRequestException
     * @throws \Afosto\Sdk\Exception\InvalidateTokensForbiddenException
     * @throws \Afosto\Sdk\Exception\InvalidateTokensInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\InvalidateTokensServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\IamUserTokenResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\IamUserTokenResponse', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\InvalidateTokensUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\InvalidateTokensNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\InvalidateTokensBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\InvalidateTokensForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\InvalidateTokensInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\InvalidateTokensServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
