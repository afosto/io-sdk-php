<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class GetClaimItems extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;

    /**
     * Get a claim and it's status.
     *
     * @param array $headerParameters {
     *
     *     @var string $x-page the requested page id
     *     @var string $x-page-size the requested page size
     * }
     */
    public function __construct(string $id, array $headerParameters = [])
    {
        $this->id = $id;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/wms/claims/{id}/items');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['x-page', 'x-page-size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('x-page', ['string']);
        $optionsResolver->setAllowedTypes('x-page-size', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\GetClaimItemsNotFoundException
     * @throws \Afosto\Sdk\Exception\GetClaimItemsBadRequestException
     * @throws \Afosto\Sdk\Exception\GetClaimItemsUnauthorizedException
     * @throws \Afosto\Sdk\Exception\GetClaimItemsForbiddenException
     * @throws \Afosto\Sdk\Exception\GetClaimItemsInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\GetClaimItemsServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\WmsClaimItem[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\WmsClaimItem[]', 'json');
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\GetClaimItemsNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\GetClaimItemsBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\GetClaimItemsUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\GetClaimItemsForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\GetClaimItemsInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\GetClaimItemsServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
