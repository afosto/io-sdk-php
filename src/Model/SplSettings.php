<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class SplSettings
{
    /**
     * @var string
     */
    protected $schema;

    public function getSchema(): ?string
    {
        return $this->schema;
    }

    public function setSchema(?string $schema): self
    {
        $this->schema = $schema;

        return $this;
    }
}
