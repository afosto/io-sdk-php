<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntDataflowType
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var string
     */
    protected $trigger;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $isProprietary;
    /**
     * @var string[]
     */
    protected $events;
    /**
     * @var string
     */
    protected $schema;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getTrigger(): ?string
    {
        return $this->trigger;
    }

    public function setTrigger(?string $trigger): self
    {
        $this->trigger = $trigger;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIsProprietary(): ?bool
    {
        return $this->isProprietary;
    }

    public function setIsProprietary(?bool $isProprietary): self
    {
        $this->isProprietary = $isProprietary;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * @param string[]|null $events
     */
    public function setEvents(?array $events): self
    {
        $this->events = $events;

        return $this;
    }

    public function getSchema(): ?string
    {
        return $this->schema;
    }

    public function setSchema(?string $schema): self
    {
        $this->schema = $schema;

        return $this;
    }
}