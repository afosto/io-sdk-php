<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrCombinedPhoneNumberSet
{
    /**
     * @var OdrPhonenumberSet
     */
    protected $contact;
    /**
     * @var OdrPhonenumberSet
     */
    protected $organisation;
    /**
     * @var OdrPhonenumberSet
     */
    protected $session;

    public function getContact(): ?OdrPhonenumberSet
    {
        return $this->contact;
    }

    public function setContact(?OdrPhonenumberSet $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getOrganisation(): ?OdrPhonenumberSet
    {
        return $this->organisation;
    }

    public function setOrganisation(?OdrPhonenumberSet $organisation): self
    {
        $this->organisation = $organisation;

        return $this;
    }

    public function getSession(): ?OdrPhonenumberSet
    {
        return $this->session;
    }

    public function setSession(?OdrPhonenumberSet $session): self
    {
        $this->session = $session;

        return $this;
    }
}