<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrInvoiceSettingsBillingVat
{
    /**
     * @var bool
     */
    protected $isShiftDisabled;
    /**
     * @var bool
     */
    protected $isShiftRequired;

    public function getIsShiftDisabled(): ?bool
    {
        return $this->isShiftDisabled;
    }

    public function setIsShiftDisabled(?bool $isShiftDisabled): self
    {
        $this->isShiftDisabled = $isShiftDisabled;

        return $this;
    }

    public function getIsShiftRequired(): ?bool
    {
        return $this->isShiftRequired;
    }

    public function setIsShiftRequired(?bool $isShiftRequired): self
    {
        $this->isShiftRequired = $isShiftRequired;

        return $this;
    }
}
