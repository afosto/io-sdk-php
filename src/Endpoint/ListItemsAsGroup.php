<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class ListItemsAsGroup extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $type;
    protected $id;

    /**
     * Returns a list of items grouped by sku, description and references.
     *
     * @param string $type
     * @param string $id
     * @param array  $headerParameters {
     *
     *     @var string $x-page the requested page id
     *     @var string $x-page-size the requested page size
     * }
     */
    public function __construct(string $type, string $id, array $headerParameters = [])
    {
        $this->type = $type;
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
        return str_replace(['{type}', '{id}'], [$this->type, $this->id], '/odr/groups/{type}/{id}');
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
        $optionsResolver->setDefaults(['x-page' => '1', 'x-page-size' => '25']);
        $optionsResolver->setAllowedTypes('x-page', ['string']);
        $optionsResolver->setAllowedTypes('x-page-size', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\ListItemsAsGroupUnauthorizedException
     * @throws \Afosto\Sdk\Exception\ListItemsAsGroupNotFoundException
     *
     * @return \Afosto\Sdk\Model\OdrGroup[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\OdrGroup[]', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\ListItemsAsGroupUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\ListItemsAsGroupNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
