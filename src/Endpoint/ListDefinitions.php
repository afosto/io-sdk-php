<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class ListDefinitions extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * List the set of definitions.
     *
     * @param array $queryParameters {
     *
     *     @var string $code
     *     @var string $model
     *     @var string $namespace
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/cnt/definitions';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
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
        $optionsResolver->setDefined(['code', 'model', 'namespace']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('code', ['string']);
        $optionsResolver->setAllowedTypes('model', ['string']);
        $optionsResolver->setAllowedTypes('namespace', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\ListDefinitionsUnauthorizedException
     * @throws \Afosto\Sdk\Exception\ListDefinitionsNotFoundException
     *
     * @return \Afosto\Sdk\Model\CntDefinition[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntDefinition[]', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\ListDefinitionsUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\ListDefinitionsNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
