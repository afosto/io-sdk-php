<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class AddRegistration extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $id;

    /**
     * Register a new participant in the conversation.
     *
     * @param int                                    $id
     * @param \Afosto\Sdk\Model\MesParticipantCreate $body The new message
     */
    public function __construct(int $id, \Afosto\Sdk\Model\MesParticipantCreate $body)
    {
        $this->id = $id;
        $this->body = $body;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/mes/conversations/{id}/register');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
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
     *
     * @return \Afosto\Sdk\Model\MesConversation|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
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
    }
}
