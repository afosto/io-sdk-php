<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Afosto\Sdk\Exception;

class DeletePrinterNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Printer not found', 404);
    }
}
