<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Exception;

class SearchInstantIndexServiceUnavailableException extends \RuntimeException implements ServerException
{
    private $error;

    public function __construct(\Afosto\Sdk\Model\Error $error)
    {
        parent::__construct('Service Unavailable', 503);
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }
}
