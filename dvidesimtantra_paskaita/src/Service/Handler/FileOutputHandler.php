<?php
declare(strict_types=1);
namespace Mindaugas\DvidesimtantraPaskaita\Service\Handler;
class FileOutputHandler implements DataOutputHandlerInterface
{
private const JSON_FILE_PATH='data.json';

private const XML_FILE_PATH='data.xml';

public function handle(string $encodedData): void
{
    if($this->isJson($encodedData)){
        file_put_contents(self::JSON_FILE_PATH,$encodedData);
    }
    else{
        file_put_contents(self::XML_FILE_PATH,$encodedData);
    }
}
private function isJson(string $encodedData):bool{
    json_decode($encodedData);
    return json_last_error()===JSON_ERROR_NONE;
}
}