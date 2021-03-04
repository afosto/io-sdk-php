<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class ListInstantIndexes extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $proxy_id;

    /**
     * List all indexes for the authenticated user.
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
        return str_replace(['{proxy_id}'], [$this->proxy_id], '/cnt/instant/proxies/{proxy_id}/indexes');
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
     * @throws \Afosto\Sdk\Exception\ListInstantIndexesUnauthorizedException
     * @throws \Afosto\Sdk\Exception\ListInstantIndexesBadRequestException
     * @throws \Afosto\Sdk\Exception\ListInstantIndexesForbiddenException
     * @throws \Afosto\Sdk\Exception\ListInstantIndexesNotFoundException
     * @throws \Afosto\Sdk\Exception\ListInstantIndexesInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\ListInstantIndexesServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\CntListIndex[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntListIndex[]', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantIndexesUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantIndexesBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantIndexesForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantIndexesNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantIndexesInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantIndexesServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}