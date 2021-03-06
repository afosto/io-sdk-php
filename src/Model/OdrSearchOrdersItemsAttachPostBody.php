<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrSearchOrdersItemsAttachPostBody
{
    /**
     * @var OdrSearch
     */
    protected $order;
    /**
     * @var OdrSearchOrdersItemsAttachPostBodyWms
     */
    protected $wms;

    public function getOrder(): ?OdrSearch
    {
        return $this->order;
    }

    public function setOrder(?OdrSearch $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getWms(): ?OdrSearchOrdersItemsAttachPostBodyWms
    {
        return $this->wms;
    }

    public function setWms(?OdrSearchOrdersItemsAttachPostBodyWms $wms): self
    {
        $this->wms = $wms;

        return $this;
    }
}
