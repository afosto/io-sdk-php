<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class GetMultipleDataflowModels extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Multi data loader.
     */
    public function __construct(array $body)
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
        return '/cnt/dataflow/loader';
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
     * @throws \Afosto\Sdk\Exception\GetMultipleDataflowModelsBadRequestException
     * @throws \Afosto\Sdk\Exception\GetMultipleDataflowModelsUnauthorizedException
     * @throws \Afosto\Sdk\Exception\GetMultipleDataflowModelsForbiddenException
     * @throws \Afosto\Sdk\Exception\GetMultipleDataflowModelsNotFoundException
     * @throws \Afosto\Sdk\Exception\GetMultipleDataflowModelsInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\GetMultipleDataflowModelsServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\CntDataflowLoaderPostResponse200Item[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntDataflowLoaderPostResponse200Item[]', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\GetMultipleDataflowModelsBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\GetMultipleDataflowModelsUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\GetMultipleDataflowModelsForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\GetMultipleDataflowModelsNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\GetMultipleDataflowModelsInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\GetMultipleDataflowModelsServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}