<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class IamSecretRequest
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var IamBackup[]
     */
    protected $backups;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return IamBackup[]|null
     */
    public function getBackups(): ?array
    {
        return $this->backups;
    }

    /**
     * @param IamBackup[]|null $backups
     */
    public function setBackups(?array $backups): self
    {
        $this->backups = $backups;

        return $this;
    }
}
