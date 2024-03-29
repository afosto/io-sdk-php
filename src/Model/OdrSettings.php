<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrSettings
{
    /**
     * @var OdrSettingsContact
     */
    protected $contact;
    /**
     * @var OdrSettingsContact
     */
    protected $organisation;
    /**
     * @var string
     */
    protected $phoneNumberId;
    /**
     * @var string[]
     */
    protected $coupons;
    /**
     * @var string
     */
    protected $dueAt;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var string
     */
    protected $returnUrl;
    /**
     * @var OdrOrderModelSettingsBilling
     */
    protected $billing;
    /**
     * @var OdrOrderSettingsShipping
     */
    protected $shipping;

    public function getContact(): ?OdrSettingsContact
    {
        return $this->contact;
    }

    public function setContact(?OdrSettingsContact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getOrganisation(): ?OdrSettingsContact
    {
        return $this->organisation;
    }

    public function setOrganisation(?OdrSettingsContact $organisation): self
    {
        $this->organisation = $organisation;

        return $this;
    }

    public function getPhoneNumberId(): ?string
    {
        return $this->phoneNumberId;
    }

    public function setPhoneNumberId(?string $phoneNumberId): self
    {
        $this->phoneNumberId = $phoneNumberId;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getCoupons(): ?array
    {
        return $this->coupons;
    }

    /**
     * @param string[]|null $coupons
     */
    public function setCoupons(?array $coupons): self
    {
        $this->coupons = $coupons;

        return $this;
    }

    public function getDueAt(): ?string
    {
        return $this->dueAt;
    }

    public function setDueAt(?string $dueAt): self
    {
        $this->dueAt = $dueAt;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    public function setReturnUrl(?string $returnUrl): self
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    public function getBilling(): ?OdrOrderModelSettingsBilling
    {
        return $this->billing;
    }

    public function setBilling(?OdrOrderModelSettingsBilling $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    public function getShipping(): ?OdrOrderSettingsShipping
    {
        return $this->shipping;
    }

    public function setShipping(?OdrOrderSettingsShipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }
}
