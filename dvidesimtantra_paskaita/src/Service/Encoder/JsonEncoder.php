<?php
declare(strict_types=1);
namespace Mindaugas\DvidesimtantraPaskaita\Service\Encoder;
class JsonEncoder implements DataEncoderInterface
{
    public function encode(array $data):string{
        return json_encode($data, JSON_PRETTY_PRINT);
    }

}