<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class GenerateDateFilter extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Generate a relative date filter.
     *
     * @param \Afosto\Sdk\Model\CntRelativeDate $body Query object
     */
    public function __construct(\Afosto\Sdk\Model\CntRelativeDate $body)
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
        return '/cnt/filters/date';
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
     * @throws \Afosto\Sdk\Exception\GenerateDateFilterUnauthorizedException
     * @throws \Afosto\Sdk\Exception\GenerateDateFilterNotFoundException
     * @throws \Afosto\Sdk\Exception\GenerateDateFilterBadRequestException
     * @throws \Afosto\Sdk\Exception\GenerateDateFilterForbiddenException
     * @throws \Afosto\Sdk\Exception\GenerateDateFilterInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\GenerateDateFilterServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\CntFiltersDatePostResponse200|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntFiltersDatePostResponse200', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\GenerateDateFilterUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\GenerateDateFilterNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\GenerateDateFilterBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\GenerateDateFilterForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\GenerateDateFilterInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\GenerateDateFilterServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
