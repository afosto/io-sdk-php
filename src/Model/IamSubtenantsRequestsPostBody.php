<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class IamSubtenantsRequestsPostBody
{
    /**
     * @var string
     */
    protected $signee;
    /**
     * @var string[]
     */
    protected $roles;

    /**
     * @return string|null
     */
    public function getSignee(): ?string
    {
        return $this->signee;
    }

    /**
     * @param string|null $signee
     *
     * @return self
     */
    public function setSignee(?string $signee): self
    {
        $this->signee = $signee;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param string[]|null $roles
     *
     * @return self
     */
    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
}