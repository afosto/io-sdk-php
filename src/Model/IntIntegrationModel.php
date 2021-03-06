<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class IntIntegrationModel
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var mixed
     */
    protected $credentials;
    /**
     * @var mixed
     */
    protected $configuration;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param mixed $credentials
     */
    public function setCredentials($credentials): self
    {
        $this->credentials = $credentials;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param mixed $configuration
     */
    public function setConfiguration($configuration): self
    {
        $this->configuration = $configuration;

        return $this;
    }
}
