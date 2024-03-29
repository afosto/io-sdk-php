<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntIndexSettingsUpdate
{
    /**
     * @var mixed
     */
    protected $synonyms;
    /**
     * @var string[]
     */
    protected $stopWords;
    /**
     * @var string[]
     */
    protected $rankingRules;
    /**
     * @var CntListIndexFilter[]
     */
    protected $filters;

    /**
     * @return mixed
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * @param mixed $synonyms
     */
    public function setSynonyms($synonyms): self
    {
        $this->synonyms = $synonyms;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getStopWords(): ?array
    {
        return $this->stopWords;
    }

    /**
     * @param string[]|null $stopWords
     */
    public function setStopWords(?array $stopWords): self
    {
        $this->stopWords = $stopWords;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRankingRules(): ?array
    {
        return $this->rankingRules;
    }

    /**
     * @param string[]|null $rankingRules
     */
    public function setRankingRules(?array $rankingRules): self
    {
        $this->rankingRules = $rankingRules;

        return $this;
    }

    /**
     * @return CntListIndexFilter[]|null
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /**
     * @param CntListIndexFilter[]|null $filters
     */
    public function setFilters(?array $filters): self
    {
        $this->filters = $filters;

        return $this;
    }
}
