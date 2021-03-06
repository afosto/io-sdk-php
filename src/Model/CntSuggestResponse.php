<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntSuggestResponse
{
    /**
     * @var CntSimpleDocumentResponse[]
     */
    protected $hits;

    /**
     * @return CntSimpleDocumentResponse[]|null
     */
    public function getHits(): ?array
    {
        return $this->hits;
    }

    /**
     * @param CntSimpleDocumentResponse[]|null $hits
     */
    public function setHits(?array $hits): self
    {
        $this->hits = $hits;

        return $this;
    }
}
