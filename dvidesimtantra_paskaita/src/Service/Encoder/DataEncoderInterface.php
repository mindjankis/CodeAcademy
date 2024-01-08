<?php
declare(strict_types=1);
namespace Mindaugas\DvidesimtantraPaskaita\Service\Encoder;

interface DataEncoderInterface
{
    public function encode(array $data):string;
}

//class Json implements DataEncoderInterface{
//
//    public function JsonEncoder(array $array): string
//    {
//        return json_encode($array, JSON_PRETTY_PRINT);
//    }
//}