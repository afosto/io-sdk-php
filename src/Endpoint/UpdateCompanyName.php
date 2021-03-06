<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class UpdateCompanyName extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;

    /**
     * Update the company name.
     *
     * @param string $id Id that belongs to the tenant
     */
    public function __construct(string $id, \Afosto\Sdk\Model\IamTenantsIdPutBody $body)
    {
        $this->id = $id;
        $this->body = $body;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/iam/tenants/{id}');
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
     * @throws \Afosto\Sdk\Exception\UpdateCompanyNameUnauthorizedException
     * @throws \Afosto\Sdk\Exception\UpdateCompanyNameNotFoundException
     * @throws \Afosto\Sdk\Exception\UpdateCompanyNameBadRequestException
     * @throws \Afosto\Sdk\Exception\UpdateCompanyNameForbiddenException
     * @throws \Afosto\Sdk\Exception\UpdateCompanyNameInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\UpdateCompanyNameServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\IamTenant|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\IamTenant', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateCompanyNameUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateCompanyNameNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateCompanyNameBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateCompanyNameForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateCompanyNameInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateCompanyNameServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
