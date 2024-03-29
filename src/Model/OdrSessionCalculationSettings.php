<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrSessionCalculationSettings
{
    /**
     * @var OdrSessionCalculationSettingsBilling
     */
    protected $billing;
    /**
     * @var OdrSessionCalculationSettingsShipping
     */
    protected $shipping;

    public function getBilling(): ?OdrSessionCalculationSettingsBilling
    {
        return $this->billing;
    }

    public function setBilling(?OdrSessionCalculationSettingsBilling $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    public function getShipping(): ?OdrSessionCalculationSettingsShipping
    {
        return $this->shipping;
    }

    public function setShipping(?OdrSessionCalculationSettingsShipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }
}
