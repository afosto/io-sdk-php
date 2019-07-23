<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class PkrGetResponse200
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $docs;

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocs(): ?string
    {
        return $this->docs;
    }

    /**
     * @param string|null $docs
     *
     * @return self
     */
    public function setDocs(?string $docs): self
    {
        $this->docs = $docs;

        return $this;
    }
}
