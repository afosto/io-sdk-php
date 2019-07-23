<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntSeachResponse
{
    /**
     * @var CntDocumentResponse[]
     */
    protected $hits;
    /**
     * @var CntFacet[]
     */
    protected $facets;
    /**
     * @var CntPagination
     */
    protected $pagination;

    /**
     * @return CntDocumentResponse[]|null
     */
    public function getHits(): ?array
    {
        return $this->hits;
    }

    /**
     * @param CntDocumentResponse[]|null $hits
     *
     * @return self
     */
    public function setHits(?array $hits): self
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * @return CntFacet[]|null
     */
    public function getFacets(): ?array
    {
        return $this->facets;
    }

    /**
     * @param CntFacet[]|null $facets
     *
     * @return self
     */
    public function setFacets(?array $facets): self
    {
        $this->facets = $facets;

        return $this;
    }

    /**
     * @return CntPagination|null
     */
    public function getPagination(): ?CntPagination
    {
        return $this->pagination;
    }

    /**
     * @param CntPagination|null $pagination
     *
     * @return self
     */
    public function setPagination(?CntPagination $pagination): self
    {
        $this->pagination = $pagination;

        return $this;
    }
}
