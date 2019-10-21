<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelPhoneNumber
{
    /**
     * @var string
     */
    protected $id;
    /**
     * Two letter country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The actual phonenumber formatted as E164.
     *
     * @var string
     */
    protected $number;
    /**
     * The actual phonenumber formatted as national number.
     *
     * @var string
     */
    protected $national;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Two letter country code.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Two letter country code.
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * The actual phonenumber formatted as E164.
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * The actual phonenumber formatted as E164.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * The actual phonenumber formatted as national number.
     *
     * @return string|null
     */
    public function getNational(): ?string
    {
        return $this->national;
    }

    /**
     * The actual phonenumber formatted as national number.
     *
     * @param string|null $national
     *
     * @return self
     */
    public function setNational(?string $national): self
    {
        $this->national = $national;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
