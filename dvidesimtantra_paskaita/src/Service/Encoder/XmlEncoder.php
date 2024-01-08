<?php
declare(strict_types=1);
namespace Mindaugas\DvidesimtantraPaskaita\Service\Encoder;
class XmlEncoder implements DataEncoderInterface
{
public function encode(array $data): string
{
    $xml= new \SimpleXMLElement('<root/>');
    array_walk_recursive($data, array($xml, 'addChild'));
    return $xml->asXML();
}
}