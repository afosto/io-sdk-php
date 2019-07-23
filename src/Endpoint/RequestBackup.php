<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class RequestBackup extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $type;
    protected $channel;

    /**
     * Request a otp over the given channel.
     *
     * @param string $type    Type that we look for
     * @param string $channel Channel of choice
     */
    public function __construct(string $type, string $channel)
    {
        $this->type = $type;
        $this->channel = $channel;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{type}', '{channel}'], [$this->type, $this->channel], '/iam/2fa/secrets/{type}/backup/{channel}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\RequestBackupBadRequestException
     * @throws \Afosto\Sdk\Exception\RequestBackupUnauthorizedException
     * @throws \Afosto\Sdk\Exception\RequestBackupNotFoundException
     *
     * @return \Afosto\Sdk\Model\IamBackupResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\IamBackupResponse', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\RequestBackupBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\RequestBackupUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\RequestBackupNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
