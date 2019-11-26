<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class RelOrganisationPaymentSettings
{
    /**
     * @var RelOrganisationPaymentSettingsPostPayment
     */
    protected $postPayment;
    /**
     * @var RelOrganisationPaymentSettingsInvoice
     */
    protected $invoice;

    /**
     * @return RelOrganisationPaymentSettingsPostPayment|null
     */
    public function getPostPayment(): ?RelOrganisationPaymentSettingsPostPayment
    {
        return $this->postPayment;
    }

    /**
     * @param RelOrganisationPaymentSettingsPostPayment|null $postPayment
     *
     * @return self
     */
    public function setPostPayment(?RelOrganisationPaymentSettingsPostPayment $postPayment): self
    {
        $this->postPayment = $postPayment;

        return $this;
    }

    /**
     * @return RelOrganisationPaymentSettingsInvoice|null
     */
    public function getInvoice(): ?RelOrganisationPaymentSettingsInvoice
    {
        return $this->invoice;
    }

    /**
     * @param RelOrganisationPaymentSettingsInvoice|null $invoice
     *
     * @return self
     */
    public function setInvoice(?RelOrganisationPaymentSettingsInvoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }
}