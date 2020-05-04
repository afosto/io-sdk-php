<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class RevokeTokens extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Revoke the current access token or all the users' tokens. Both options will revoke all the users' refresh tokens.
     *
     * @param array $queryParameters {
     *
     *     @var string $tokens Current (default value) will revoke only the token that is passed as Authorization header. JWT will revoke all the users' JWT tokens. All will revoke all JWT and refresh tokens that belong to the user.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/iam/jwt/revoke';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['tokens']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['tokens' => 'current']);
        $optionsResolver->setAllowedTypes('tokens', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\RevokeTokensUnauthorizedException
     * @throws \Afosto\Sdk\Exception\RevokeTokensNotFoundException
     * @throws \Afosto\Sdk\Exception\RevokeTokensBadRequestException
     * @throws \Afosto\Sdk\Exception\RevokeTokensForbiddenException
     * @throws \Afosto\Sdk\Exception\RevokeTokensInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\RevokeTokensServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\IamAccessToken|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\IamAccessToken', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\RevokeTokensUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\RevokeTokensNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\RevokeTokensBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\RevokeTokensForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\RevokeTokensInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\RevokeTokensServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
