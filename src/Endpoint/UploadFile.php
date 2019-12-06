<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class UploadFile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $signature;

    /**
     * Upload a new file.
     *
     * @param array $formParameters {
     *
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     * }
     */
    public function __construct(string $signature, array $formParameters = [])
    {
        $this->signature = $signature;
        $this->formParameters = $formParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{signature}'], [$this->signature], '/cnt/files/upload/{signature}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getMultipartBody($streamFactory);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['file']);
        $optionsResolver->setRequired(['file']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('file', ['string', 'resource', '\\Psr\\Http\\Message\\StreamInterface']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Afosto\Sdk\Exception\UploadFileBadRequestException
     * @throws \Afosto\Sdk\Exception\UploadFileUnauthorizedException
     *
     * @return \Afosto\Sdk\Model\CntFile[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\CntFile[]', 'json');
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\UploadFileBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\UploadFileUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
