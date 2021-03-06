<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class CreateSessionPhoneNumber extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;

    /**
     * Create a phonenumber.
     */
    public function __construct(string $id, \Afosto\Sdk\Model\OdrNewPhonenumber $body)
    {
        $this->id = $id;
        $this->body = $body;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/odr/sessions/{id}/phonenumbers');
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
     * @throws \Afosto\Sdk\Exception\CreateSessionPhoneNumberBadRequestException
     * @throws \Afosto\Sdk\Exception\CreateSessionPhoneNumberUnauthorizedException
     * @throws \Afosto\Sdk\Exception\CreateSessionPhoneNumberForbiddenException
     * @throws \Afosto\Sdk\Exception\CreateSessionPhoneNumberNotFoundException
     * @throws \Afosto\Sdk\Exception\CreateSessionPhoneNumberInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\CreateSessionPhoneNumberServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\OdrPhonenumber|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (202 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\OdrPhonenumber', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\CreateSessionPhoneNumberBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\CreateSessionPhoneNumberUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\CreateSessionPhoneNumberForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\CreateSessionPhoneNumberNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\CreateSessionPhoneNumberInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\CreateSessionPhoneNumberServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
