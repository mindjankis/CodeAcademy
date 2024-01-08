<?php

declare(strict_types=1);

namespace dvidesimtpirma_paskaita;

use DateTime;

class Logger
{
    public const LOGGER_FILE_PATH = '.\log.txt';

    public function addlogger(string $errormsg): void
    {
        $dateTime = (new DateTime())->format('Y-m-d H:i:s');
        $errormsg1 = sprintf('%s %s %s', $dateTime, $errormsg, PHP_EOL);
        file_put_contents(self::LOGGER_FILE_PATH, $errormsg1, FILE_APPEND);
    }

}