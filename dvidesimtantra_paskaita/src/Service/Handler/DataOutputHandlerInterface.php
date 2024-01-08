<?php

namespace  Mindaugas\DvidesimtantraPaskaita\Service\Handler;

interface DataOutputHandlerInterface
{
    public function handle(string $encodedData):void;
}
//class File implements DataOutputHandlerInterface{
//    public function ToFile(string $string):void{
//        file_put_contents('categories.json', $string);
//    }
//
//}