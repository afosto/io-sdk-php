<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class TplThemeActiveBuild
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $repositoryId;
    /**
     * @var TplGitReference
     */
    protected $gitReference;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }

    public function setRepositoryId(?int $repositoryId): self
    {
        $this->repositoryId = $repositoryId;

        return $this;
    }

    public function getGitReference(): ?TplGitReference
    {
        return $this->gitReference;
    }

    public function setGitReference(?TplGitReference $gitReference): self
    {
        $this->gitReference = $gitReference;

        return $this;
    }
}
