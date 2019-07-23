<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Exception;

class DownloadShipmentsUnauthorizedException extends \RuntimeException implements ClientException
{
    private $error;

    public function __construct(\Afosto\Sdk\Model\Error $error)
    {
        parent::__construct('Unauthorized', 401);
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }
}
