<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class TplGitReference
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var TplGitReferenceTag
     */
    protected $tag;
    /**
     * @var TplGitReferenceBranch
     */
    protected $branch;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTag(): ?TplGitReferenceTag
    {
        return $this->tag;
    }

    public function setTag(?TplGitReferenceTag $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getBranch(): ?TplGitReferenceBranch
    {
        return $this->branch;
    }

    public function setBranch(?TplGitReferenceBranch $branch): self
    {
        $this->branch = $branch;

        return $this;
    }
}
