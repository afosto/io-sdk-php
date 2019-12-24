<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class DeleteItems extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;

    /**
     * Delete items from the given reference.
     */
    public function __construct(string $id, \Afosto\Sdk\Model\OdrStackDeleteModel $body)
    {
        $this->id = $id;
        $this->body = $body;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/odr/stacks/{id}/items');
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
     * @throws \Afosto\Sdk\Exception\DeleteItemsUnauthorizedException
     * @throws \Afosto\Sdk\Exception\DeleteItemsNotFoundException
     * @throws \Afosto\Sdk\Exception\DeleteItemsBadRequestException
     * @throws \Afosto\Sdk\Exception\DeleteItemsForbiddenException
     * @throws \Afosto\Sdk\Exception\DeleteItemsInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\DeleteItemsServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteItemsUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteItemsNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteItemsBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteItemsForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteItemsInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\DeleteItemsServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
