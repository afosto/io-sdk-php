<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class ViewPurgeToken extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $token;

    /**
     * View a purge token.
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{token}'], [$this->token], '/iam/purges/{token}');
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
     * @throws \Afosto\Sdk\Exception\ViewPurgeTokenUnauthorizedException
     * @throws \Afosto\Sdk\Exception\ViewPurgeTokenNotFoundException
     * @throws \Afosto\Sdk\Exception\ViewPurgeTokenBadRequestException
     * @throws \Afosto\Sdk\Exception\ViewPurgeTokenForbiddenException
     * @throws \Afosto\Sdk\Exception\ViewPurgeTokenInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\ViewPurgeTokenServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\IamPurgeToken|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\IamPurgeToken', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\ViewPurgeTokenUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\ViewPurgeTokenNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\ViewPurgeTokenBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\ViewPurgeTokenForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\ViewPurgeTokenInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\ViewPurgeTokenServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
