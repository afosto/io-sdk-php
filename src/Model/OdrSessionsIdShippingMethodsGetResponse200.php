<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrSessionsIdShippingMethodsGetResponse200
{
    /**
     * @var OdrSelectSessionShippingMethodRequest
     */
    protected $active;
    /**
     * @var OdrGetSessionShippingMethodResponse[]
     */
    protected $options;

    public function getActive(): ?OdrSelectSessionShippingMethodRequest
    {
        return $this->active;
    }

    public function setActive(?OdrSelectSessionShippingMethodRequest $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return OdrGetSessionShippingMethodResponse[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param OdrGetSessionShippingMethodResponse[]|null $options
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;

        return $this;
    }
}
