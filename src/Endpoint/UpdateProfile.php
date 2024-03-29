<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class UpdateProfile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $path;

    /**
     * Update the profile content.
     *
     * @param string    $path            The correlationID of a configuration where we are updating the configuration off
     * @param \stdClass $body            update a profile
     * @param array     $queryParameters {
     *
     *     @var string $channel_id the channel_id to resolve the channel in the path for
     * }
     */
    public function __construct(string $path, \stdClass $body, array $queryParameters = [])
    {
        $this->path = $path;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{path}'], [$this->path], '/iam/profiles/{path}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [['Content-Type' => ['application/json']], json_encode($this->body)];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['channel_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('channel_id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\UpdateProfileBadRequestException
     * @throws \Afosto\Sdk\Exception\UpdateProfileUnauthorizedException
     * @throws \Afosto\Sdk\Exception\UpdateProfileForbiddenException
     * @throws \Afosto\Sdk\Exception\UpdateProfileConflictException
     * @throws \Afosto\Sdk\Exception\UpdateProfileNotFoundException
     * @throws \Afosto\Sdk\Exception\UpdateProfileInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\UpdateProfileServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateProfileBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error[]', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateProfileUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error[]', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateProfileForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error[]', 'json'));
        }
        if (409 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateProfileConflictException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error[]', 'json'));
        }
        if (200 === $status) {
            return json_decode($body);
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateProfileNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateProfileInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateProfileServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
