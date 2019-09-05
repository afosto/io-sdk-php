<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrSignOn
{
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $audience;
    /**
     * @var int
     */
    protected $shouldExpireAt;

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAudience(): ?string
    {
        return $this->audience;
    }

    /**
     * @param string|null $audience
     *
     * @return self
     */
    public function setAudience(?string $audience): self
    {
        $this->audience = $audience;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getShouldExpireAt(): ?int
    {
        return $this->shouldExpireAt;
    }

    /**
     * @param int|null $shouldExpireAt
     *
     * @return self
     */
    public function setShouldExpireAt(?int $shouldExpireAt): self
    {
        $this->shouldExpireAt = $shouldExpireAt;

        return $this;
    }
}