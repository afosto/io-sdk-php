<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class QcqRoute
{
    /**
     * @var string
     */
    protected $path;
    /**
     * @var QcqRouteOrigin
     */
    protected $origin;
    /**
     * @var QcqRouteSettings
     */
    protected $settings;

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getOrigin(): ?QcqRouteOrigin
    {
        return $this->origin;
    }

    public function setOrigin(?QcqRouteOrigin $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getSettings(): ?QcqRouteSettings
    {
        return $this->settings;
    }

    public function setSettings(?QcqRouteSettings $settings): self
    {
        $this->settings = $settings;

        return $this;
    }
}
