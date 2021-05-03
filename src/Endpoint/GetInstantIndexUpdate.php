<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class GetInstantIndexUpdate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    protected $update_id;

    /**
     * Get a single update on from the specified index.
     */
    public function __construct(string $id, int $updateId)
    {
        $this->id = $id;
        $this->update_id = $updateId;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{update_id}'], [$this->id, $this->update_id], '/cnt/instant/indexes/{id}/updates/{update_id}');
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
     * @throws \Afosto\Sdk\Exception\GetInstantIndexUpdateBadRequestException
     * @throws \Afosto\Sdk\Exception\GetInstantIndexUpdateNotFoundException
     * @throws \Afosto\Sdk\Exception\GetInstantIndexUpdateUnauthorizedException
     * @throws \Afosto\Sdk\Exception\GetInstantIndexUpdateForbiddenException
     * @throws \Afosto\Sdk\Exception\GetInstantIndexUpdateInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\GetInstantIndexUpdateServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\CntIndexUpdate|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntIndexUpdate', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantIndexUpdateBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantIndexUpdateNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantIndexUpdateUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantIndexUpdateForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantIndexUpdateInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\GetInstantIndexUpdateServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
