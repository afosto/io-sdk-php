<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class ListInstantProxies extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * List all proxies for a tenant.
     *
     * @param array $headerParameters {
     *
     *     @var int $x-page-size
     *     @var int $x-page
     * }
     */
    public function __construct(array $headerParameters = [])
    {
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/cnt/instant/proxies';
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
        $optionsResolver->setDefined(['x-page-size', 'x-page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['x-page-size' => 25, 'x-page' => 1]);
        $optionsResolver->setAllowedTypes('x-page-size', ['int']);
        $optionsResolver->setAllowedTypes('x-page', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\ListInstantProxiesUnauthorizedException
     * @throws \Afosto\Sdk\Exception\ListInstantProxiesBadRequestException
     * @throws \Afosto\Sdk\Exception\ListInstantProxiesForbiddenException
     * @throws \Afosto\Sdk\Exception\ListInstantProxiesNotFoundException
     * @throws \Afosto\Sdk\Exception\ListInstantProxiesInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\ListInstantProxiesServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\CntInstantProxy[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntInstantProxy[]', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantProxiesUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantProxiesBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantProxiesForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantProxiesNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantProxiesInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\ListInstantProxiesServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
