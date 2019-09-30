<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrProcess
{
    /**
     * @var string
     */
    protected $action;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var OdrAttempt[]
     */
    protected $attempts;

    /**
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return OdrAttempt[]|null
     */
    public function getAttempts(): ?array
    {
        return $this->attempts;
    }

    /**
     * @param OdrAttempt[]|null $attempts
     *
     * @return self
     */
    public function setAttempts(?array $attempts): self
    {
        $this->attempts = $attempts;

        return $this;
    }
}
