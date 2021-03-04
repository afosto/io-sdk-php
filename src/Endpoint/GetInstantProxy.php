<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class GetInstantProxy extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $proxy_id;

    /**
     * Show a single proxy for the tenant.
     */
    public function __construct(string $proxyId)
    {
        $this->proxy_id = $proxyId;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{proxy_id}'], [$this->proxy_id], '/cnt/instant/proxies/{proxy_id}');
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
     * @throws \Afosto\Sdk\Exception\GetInstantProxyUnauthorizedException
     * @throws \Afosto\Sdk\Exception\GetInstantProxyNotFoundException
     * @throws \Afosto\Sdk\Exception\GetInstantProxyBadRequestException
     * @throws \Afosto\Sdk\Exception\GetInstantProxyForbiddenException
     * @throws \Afosto\Sdk\Exception\GetInstantProxyInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\GetInstantProxyServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\CntInstantProxy|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntInstantProxy', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantProxyUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantProxyNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantProxyBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantProxyForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantProxyInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantProxyServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}