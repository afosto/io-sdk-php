<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntColumnError
{
    /**
     * @var string
     */
    protected $column;
    /**
     * @var string
     */
    protected $level;
    /**
     * @var string
     */
    protected $message;

    public function getColumn(): ?string
    {
        return $this->column;
    }

    public function setColumn(?string $column): self
    {
        $this->column = $column;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
