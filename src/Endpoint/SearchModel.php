<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class SearchModel extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $namespace;
    protected $code;
    protected $model;

    /**
     * Run a complex search.
     *
     * @param string                           $namespace        the namespace
     * @param \Afosto\Sdk\Model\CntSearchQuery $body             Query object
     * @param array                            $headerParameters {
     *
     *     @var string $x-page
     *     @var int $x-page-size
     * }
     */
    public function __construct(string $namespace = 'default', string $code, string $model, \Afosto\Sdk\Model\CntSearchQuery $body, array $headerParameters = [])
    {
        $this->namespace = $namespace;
        $this->code = $code;
        $this->model = $model;
        $this->body = $body;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{namespace}', '{code}', '{model}'], [$this->namespace, $this->code, $this->model], '/cnt/search/{namespace}/{code}/{model}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
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
        $optionsResolver->setDefaults(['x-page-size' => 25]);
        $optionsResolver->setAllowedTypes('x-page', ['string']);
        $optionsResolver->setAllowedTypes('x-page-size', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\SearchModelUnauthorizedException
     * @throws \Afosto\Sdk\Exception\SearchModelNotFoundException
     * @throws \Afosto\Sdk\Exception\SearchModelBadRequestException
     * @throws \Afosto\Sdk\Exception\SearchModelForbiddenException
     * @throws \Afosto\Sdk\Exception\SearchModelInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\SearchModelServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\CntSeachResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntSeachResponse', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\SearchModelUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\SearchModelNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\SearchModelBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\SearchModelForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\SearchModelInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\SearchModelServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
