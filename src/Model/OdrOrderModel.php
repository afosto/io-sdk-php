<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrOrderModel
{
    /**
     * @var OdrProcessing
     */
    protected $processing;
    /**
     * @var OdrSettings
     */
    protected $settings;
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var mixed
     */
    protected $metadata;

    public function getProcessing(): ?OdrProcessing
    {
        return $this->processing;
    }

    public function setProcessing(?OdrProcessing $processing): self
    {
        $this->processing = $processing;

        return $this;
    }

    public function getSettings(): ?OdrSettings
    {
        return $this->settings;
    }

    public function setSettings(?OdrSettings $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }
}
