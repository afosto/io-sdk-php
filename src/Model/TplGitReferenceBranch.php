<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class TplGitReferenceBranch
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $commitSha = 'latest';

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCommitSha(): ?string
    {
        return $this->commitSha;
    }

    public function setCommitSha(?string $commitSha): self
    {
        $this->commitSha = $commitSha;

        return $this;
    }
}
