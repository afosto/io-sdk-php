<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class IamRoleModel
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $scopes;

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
     * @return string[]|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }

    /**
     * @param string[]|null $scopes
     */
    public function setScopes(?array $scopes): self
    {
        $this->scopes = $scopes;

        return $this;
    }
}
