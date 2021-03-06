<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class ResetPassword extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * So the user can login.
     *
     * @param \Afosto\Sdk\Model\IamPasswordReset $body Reset object
     */
    public function __construct(\Afosto\Sdk\Model\IamPasswordReset $body)
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
        return '/iam/users/password';
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
     * @throws \Afosto\Sdk\Exception\ResetPasswordUnauthorizedException
     * @throws \Afosto\Sdk\Exception\ResetPasswordNotFoundException
     * @throws \Afosto\Sdk\Exception\ResetPasswordBadRequestException
     * @throws \Afosto\Sdk\Exception\ResetPasswordForbiddenException
     * @throws \Afosto\Sdk\Exception\ResetPasswordInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\ResetPasswordServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\IamUser|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\IamUser', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\ResetPasswordUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\ResetPasswordNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\ResetPasswordBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\ResetPasswordForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\ResetPasswordInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\ResetPasswordServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
