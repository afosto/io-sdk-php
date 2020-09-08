<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class CntDataflow
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var CntDataflowTrigger
     */
    protected $trigger;
    /**
     * @var mixed
     */
    protected $config;
    /**
     * @var CntDataflowFilter[]
     */
    protected $filter;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

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

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTrigger(): ?CntDataflowTrigger
    {
        return $this->trigger;
    }

    public function setTrigger(?CntDataflowTrigger $trigger): self
    {
        $this->trigger = $trigger;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param mixed $config
     */
    public function setConfig($config): self
    {
        $this->config = $config;

        return $this;
    }

    /**
     * @return CntDataflowFilter[]|null
     */
    public function getFilter(): ?array
    {
        return $this->filter;
    }

    /**
     * @param CntDataflowFilter[]|null $filter
     */
    public function setFilter(?array $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
