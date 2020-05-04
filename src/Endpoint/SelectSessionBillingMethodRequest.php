<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class SelectSessionBillingMethodRequest extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;

    /**
     * Select billing method.
     */
    public function __construct(string $id, \Afosto\Sdk\Model\OdrSelectSessionBillingMethodRequest $body)
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
        return str_replace(['{id}'], [$this->id], '/odr/sessions/{id}/billing/methods');
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
     * @throws \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestBadRequestException
     * @throws \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestUnauthorizedException
     * @throws \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestForbiddenException
     * @throws \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestNotFoundException
     * @throws \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\OdrSelectSessionBillingMethodRequest|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\OdrSelectSessionBillingMethodRequest', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\SelectSessionBillingMethodRequestServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}