<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Endpoint;

class UpdateTransferTransportShipment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $transfer_id;
    protected $id;

    /**
     * Create an optimized set of claims.
     */
    public function __construct(string $transferId, string $id, \Afosto\Sdk\Model\WmsTransfersTransferIdTransportsIdShipmentPutBody $body)
    {
        $this->transfer_id = $transferId;
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
        return str_replace(['{transfer_id}', '{id}'], [$this->transfer_id, $this->id], '/wms/transfers/{transfer_id}/transports/{id}/shipment');
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
     * @throws \Afosto\Sdk\Exception\UpdateTransferTransportShipmentUnauthorizedException
     * @throws \Afosto\Sdk\Exception\UpdateTransferTransportShipmentNotFoundException
     * @throws \Afosto\Sdk\Exception\UpdateTransferTransportShipmentBadRequestException
     * @throws \Afosto\Sdk\Exception\UpdateTransferTransportShipmentForbiddenException
     * @throws \Afosto\Sdk\Exception\UpdateTransferTransportShipmentInternalServerErrorException
     * @throws \Afosto\Sdk\Exception\UpdateTransferTransportShipmentServiceUnavailableException
     *
     * @return \Afosto\Sdk\Model\WmsTransport|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Afosto\\Sdk\\Model\\WmsTransport', 'json');
        }
        if (401 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateTransferTransportShipmentUnauthorizedException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateTransferTransportShipmentNotFoundException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (400 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateTransferTransportShipmentBadRequestException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (403 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateTransferTransportShipmentForbiddenException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (500 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateTransferTransportShipmentInternalServerErrorException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
        if (503 === $status) {
            throw new \Afosto\Sdk\Exception\UpdateTransferTransportShipmentServiceUnavailableException($serializer->deserialize($body, 'Afosto\\Sdk\\Model\\Error', 'json'));
        }
    }
}
