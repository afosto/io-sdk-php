<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Exception;

class UpdateTheProfileByPathConflictException extends \RuntimeException implements ClientException
{
    private $errorList;

    public function __construct($errorList)
    {
        parent::__construct('conflicted schema detected', 409);
        $this->errorList = $errorList;
    }

    public function getErrorList()
    {
        return $this->errorList;
    }
}
