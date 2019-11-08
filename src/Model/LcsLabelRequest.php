<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class LcsLabelRequest
{
    /**
     * @var string
     */
    protected $path;
    /**
     * @var string
     */
    protected $filename;
    /**
     * @var string
     */
    protected $reference;
    /**
     * Optional text to be printed on label.
     *
     * @var string
     */
    protected $labelText;
    /**
     * @var bool
     */
    protected $isReturn = false;

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string|null $filename
     *
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Optional text to be printed on label.
     *
     * @return string|null
     */
    public function getLabelText(): ?string
    {
        return $this->labelText;
    }

    /**
     * Optional text to be printed on label.
     *
     * @param string|null $labelText
     *
     * @return self
     */
    public function setLabelText(?string $labelText): self
    {
        $this->labelText = $labelText;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsReturn(): ?bool
    {
        return $this->isReturn;
    }

    /**
     * @param bool|null $isReturn
     *
     * @return self
     */
    public function setIsReturn(?bool $isReturn): self
    {
        $this->isReturn = $isReturn;

        return $this;
    }
}