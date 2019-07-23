<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class CreateSecret extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $type;

    /**
     * Create a new secret for 2FA.
     *
     * @param string                             $type Type that we look for
     * @param \Afosto\Sdk\Model\IamSecretRequest $body Secret request
     */
    public function __construct(string $type, \Afosto\Sdk\Model\IamSecretRequest $body)
    {
        $this->type = $type;
        $this->body = $body;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{type}'], [$this->type], '/iam/2fa/secrets/{type}');
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
     * @throws \Afosto\Sdk\Exception\CreateSecretBadRequestException
     * @throws \Afosto\Sdk\Exception\CreateSecretUnauthorizedException
     * @throws \Afosto\Sdk\Exception\CreateSecretNotFoundException
     *
     * @return \Afosto\Sdk\Model\IamSecret|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\IamSecret', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\CreateSecretBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\CreateSecretUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\CreateSecretNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
