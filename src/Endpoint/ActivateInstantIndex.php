<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class ActivateInstantIndex extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $proxy_id;
    protected $id;

    /**
     * Activate a single index.
     */
    public function __construct(string $proxyId, string $id)
    {
        $this->proxy_id = $proxyId;
        $this->id = $id;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{proxy_id}', '{id}'], [$this->proxy_id, $this->id], '/cnt/instant/proxies/{proxy_id}/indexes/{id}/activate');
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
     * @throws \Afosto\Sdk\Exception\ActivateInstantIndexUnauthorizedException
     * @throws \Afosto\Sdk\Exception\ActivateInstantIndexNotFoundException
     * @throws \Afosto\Sdk\Exception\ActivateInstantIndexBadRequestException
     * @throws \Afosto\Sdk\Exception\ActivateInstantIndexForbiddenException
     * @throws \Afosto\Sdk\Exception\ActivateInstantIndexInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\ActivateInstantIndexServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\CntListIndex|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntListIndex', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\ActivateInstantIndexUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\ActivateInstantIndexNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\ActivateInstantIndexBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\ActivateInstantIndexForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\ActivateInstantIndexInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\ActivateInstantIndexServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
