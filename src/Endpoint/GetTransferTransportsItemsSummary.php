<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class GetTransferTransportsItemsSummary extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;

    /**
     * returns a describing lsit of transfer items with their route.
     *
     * @param array $queryParameters {
     *
     *     @var string $claim_id filter for a specific claim_id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-page the requested page id
     *     @var string $x-page-size the requested page size
     * }
     */
    public function __construct(string $id, array $queryParameters = [], array $headerParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/wms/transfers/{id}/summary');
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
        $optionsResolver->setDefined(['claim_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('claim_id', ['string']);

        return $optionsResolver;
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
     * @throws \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryNotFoundException
     * @throws \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryBadRequestException
     * @throws \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryUnauthorizedException
     * @throws \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryForbiddenException
     * @throws \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\WmsTraveledRouteSummary[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\WmsTraveledRouteSummary[]', 'json');
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\GetTransferTransportsItemsSummaryServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}