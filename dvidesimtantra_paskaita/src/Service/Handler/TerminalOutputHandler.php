<?php
declare(strict_types=1);
namespace Mindaugas\DvidesimtantraPaskaita\Service\Handler;
class TerminalOutputHandler implements DataOutputHandlerInterface
{
public function handle(string $encodedData): void
{
    echo $encodedData . PHP_EOL;
}
}