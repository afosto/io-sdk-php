<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class Suggest extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Run a simple, fast suggest search.
     *
     * @param array $queryParameters {
     *
     *     @var string $q The query
     *     @var int $limit The query
     *     @var array $codes The query
     *     @var array $models The models we want to query
     *     @var array $namespaces The namesapce we want to query
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
        return '/cnt/suggest';
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
        $optionsResolver->setDefined(['q', 'limit', 'codes', 'models', 'namespaces']);
        $optionsResolver->setRequired(['q']);
        $optionsResolver->setDefaults(['limit' => 5]);
        $optionsResolver->setAllowedTypes('q', ['string']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('codes', ['array']);
        $optionsResolver->setAllowedTypes('models', ['array']);
        $optionsResolver->setAllowedTypes('namespaces', ['array']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\SuggestUnauthorizedException
     * @throws \Afosto\Sdk\Exception\SuggestNotFoundException
     * @throws \Afosto\Sdk\Exception\SuggestBadRequestException
     * @throws \Afosto\Sdk\Exception\SuggestForbiddenException
     * @throws \Afosto\Sdk\Exception\SuggestInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\SuggestServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\CntSuggestResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntSuggestResponse', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\SuggestUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\SuggestNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\SuggestBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\SuggestForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\SuggestInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\SuggestServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
