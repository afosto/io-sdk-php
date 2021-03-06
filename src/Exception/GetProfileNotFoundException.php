<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Exception;

class GetProfileNotFoundException extends \RuntimeException implements ClientException
{
    private $errorList;

    public function __construct($errorList)
    {
        parent::__construct('invalid namescape', 404);
        $this->errorList = $errorList;
    }

    public function getErrorList()
    {
        return $this->errorList;
    }
}
