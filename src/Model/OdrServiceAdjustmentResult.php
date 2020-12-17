<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Model;

class OdrServiceAdjustmentResult
{
    /**
     * @var bool
     */
    protected $isAppliedRule;
    /**
     * @var string
     */
    protected $ruleId;
    /**
     * @var int
     */
    protected $output;

    public function getIsAppliedRule(): ?bool
    {
        return $this->isAppliedRule;
    }

    public function setIsAppliedRule(?bool $isAppliedRule): self
    {
        $this->isAppliedRule = $isAppliedRule;

        return $this;
    }

    public function getRuleId(): ?string
    {
        return $this->ruleId;
    }

    public function setRuleId(?string $ruleId): self
    {
        $this->ruleId = $ruleId;

        return $this;
    }

    public function getOutput(): ?int
    {
        return $this->output;
    }

    public function setOutput(?int $output): self
    {
        $this->output = $output;

        return $this;
    }
}
