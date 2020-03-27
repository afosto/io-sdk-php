<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class GetBillingOption extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $secret;

    /**
     * Returns a list of applicable shipping methods.
     *
     * @param array $queryParameters {
     *
     *     @var string $zipcode prefiled with the zipcode of the primary address
     *     @var string $carrier the carrier to filter for
     *     @var string $from from what timestamp to gather shipping windows
     * }
     */
    public function __construct(string $secret, array $queryParameters = [])
    {
        $this->secret = $secret;
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{secret}'], [$this->secret], '/odr/sessions/{secret}/billing');
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
        $optionsResolver->setDefined(['zipcode', 'carrier', 'from']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('zipcode', ['string']);
        $optionsResolver->setAllowedTypes('carrier', ['string']);
        $optionsResolver->setAllowedTypes('from', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\GetBillingOptionBadRequestException
     * @throws \Afosto\Sdk\Exception\GetBillingOptionUnauthorizedException
     * @throws \Afosto\Sdk\Exception\GetBillingOptionForbiddenException
     * @throws \Afosto\Sdk\Exception\GetBillingOptionNotFoundException
     * @throws \Afosto\Sdk\Exception\GetBillingOptionInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\GetBillingOptionServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\OdrGetSessionDeliveryWindow[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\OdrGetSessionDeliveryWindow[]', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\GetBillingOptionBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\GetBillingOptionUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\GetBillingOptionForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\GetBillingOptionNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\GetBillingOptionInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\GetBillingOptionServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
