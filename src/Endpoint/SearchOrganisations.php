<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class SearchOrganisations extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Search organisations.
     */
    public function __construct(\Afosto\Sdk\Model\RelOrganisationSearch $body)
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
        return '/rel/search/organisations';
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
     * @throws \Afosto\Sdk\Exception\SearchOrganisationsBadRequestException
     * @throws \Afosto\Sdk\Exception\SearchOrganisationsUnauthorizedException
     * @throws \Afosto\Sdk\Exception\SearchOrganisationsForbiddenException
     * @throws \Afosto\Sdk\Exception\SearchOrganisationsInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\SearchOrganisationsServiceUnavailableException
     * @throws \Afosto\Sdk\Exception\SearchOrganisationsNotFoundException
     *
     * @return \Afosto\Sdk\Model\RelOrganisation[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\RelOrganisation[]', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\SearchOrganisationsBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\SearchOrganisationsUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\SearchOrganisationsForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\SearchOrganisationsInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\SearchOrganisationsServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\SearchOrganisationsNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
