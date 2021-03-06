<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class AddRegistration extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;

    /**
     * Register a new participant in the conversation.
     *
     * @param \Afosto\Sdk\Model\MesParticipantCreate $body The new message
     */
    public function __construct(int $id, \Afosto\Sdk\Model\MesParticipantCreate $body)
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
        return str_replace(['{id}'], [$this->id], '/mes/conversations/{id}/register');
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
     * @throws \Afosto\Sdk\Exception\AddRegistrationUnauthorizedException
     * @throws \Afosto\Sdk\Exception\AddRegistrationNotFoundException
     * @throws \Afosto\Sdk\Exception\AddRegistrationBadRequestException
     * @throws \Afosto\Sdk\Exception\AddRegistrationForbiddenException
     * @throws \Afosto\Sdk\Exception\AddRegistrationInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\AddRegistrationServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\MesConversation|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\MesConversation', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\AddRegistrationUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\AddRegistrationNotFoundException();
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\AddRegistrationBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\AddRegistrationForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\AddRegistrationInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\AddRegistrationServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
