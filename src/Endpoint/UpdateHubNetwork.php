<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class UpdateHubNetwork extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;

    /**
     * Updates the hub network.
     *
     * @param int                                        $id   ID of hub to update network information for
     * @param \Afosto\Sdk\Model\SplCreateNetworkDevice[] $body The new hub
     */
    public function __construct(int $id, array $body)
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
        return str_replace(['{id}'], [$this->id], '/spl/hubs/{id}/network');
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
     * @throws \Afosto\Sdk\Exception\UpdateHubNetworkUnauthorizedException
     *
     * @return \Afosto\Sdk\Model\SplNetworkDevice[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\SplNetworkDevice[]', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateHubNetworkUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
