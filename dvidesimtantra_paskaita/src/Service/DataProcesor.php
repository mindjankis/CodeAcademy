<?php
declare(strict_types=1);
//require_once '../../vendor/autoload.php';
//$categories = [
//    'fruits' => [
//        'type' => 'category',
//        'items' => [
//            'apple' => [
//                'count' => 5,
//                'price' => 0.15,
//            ],
//            'pear' => [
//                'count' => 5,
//                'price' => 0.15,
//            ],
//        ],
//    ],
//    'vegetables' => [
//        'type' => 'category',
//        'items' => [
//            'carrot' => [
//                'count' => 100,
//                'price' => 0.01,
//            ],
//            'tomato' => [
//                'count' => 45,
//                'price' => 0.5,
//            ],
//        ],
//    ],
//    'seafood' => [
//        'type' => 'category',
//        'items' => [
//            'seabass' => [
//                'count' => 15,
//                'price' => 5.5,
//            ],
//        ],
//    ],
//    'alcohol' => [
//        'type' => 'category',
//        'items' => [
//            'beer_bottle' => [
//                'count' => 22,
//                'price' => 1.3,
//            ],
//            'wine_bottle' => [
//                'count' => 4,
//                'price' => 8,
//            ],
//        ],
//    ],
//    'milk' => [
//        'type' => 'category',
//        'items' => [
//            'cheese' => [
//                'count' => 1,
//                'price' => 4.5,
//            ],
//            'yoghurt' => [
//                'count' => 13,
//                'price' => 0.99,
//            ],
//        ],
//    ],
//    'bread' => [
//        'type' => 'category',
//        'items' => [
//            'brown_bread' => [
//                'count' => 11,
//                'price' => 2.1,
//            ],
//            'white_bread' => [
//                'count' => 110,
//                'price' => 1.3,
//            ],
//        ],
//    ],
//];

namespace Mindaugas\DvidesimtantraPaskaita\Service;

use Mindaugas\DvidesimtantraPaskaita\Service\Handler\DataOutputHandlerInterface;
use Mindaugas\DvidesimtantraPaskaita\Service\Handler\TerminalOutputHandler;
use Mindaugas\DvidesimtantraPaskaita\Service\Handler\FileOutputHandler;
use Mindaugas\DvidesimtantraPaskaita\Service\Encoder\DataEncoderInterface;
use Mindaugas\DvidesimtantraPaskaita\Service\Encoder\JsonEncoder;
use Mindaugas\DvidesimtantraPaskaita\Service\Encoder\XmlEncoder;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;



class DataProcesor

{
public function __construct(private array $data)
{
}

public function process(string $format, string $output):void{
    $encoder=$this->prepareEncoder($format);
    $handler=$this->prepareHandler($output);
    $handler->handle($encoder->encode($this->data));

}

    private function prepareEncoder(string $format):DataEncoderInterface{
    switch (strtolower($format)){
        case 'json':
            $encoder= new JsonEncoder;
            break;
        case 'xml':
            $encoder= new XmlEncoder;
            break;
        default:
            $logger = new Logger('DataProcessorLog');
            $logger->pushHandler(new StreamHandler('./my.log', Level::Error));
            $logger->error('Unrecognized format type. Allowed types: [JSON, XML]');
            throw new \Exception('Unrecognized format type. Allowed types [JSON or XML]');
        }
        return $encoder;
    }

    private function prepareHandler(string $output):DataOutputHandlerInterface{
        switch (strtolower($output)){
            case 'file':
                $handler= new FileOutputHandler;
                break;
            case 'terminal':
                $handler= new TerminalOutputHandler;
                break;
            default:
                $logger = new Logger('DataProcessorLog');
                $logger->pushHandler(new StreamHandler('./my.log', Level::Error));
                $logger->error('Unrecognized output type. Allowed types: [FILE, TERMINAL]');
                throw new \Exception('Unrecognized output type. Allowed types: [FILE, TERMINAL]');
        }
        return $handler;
    }
}

//$dataprocessor=new DataProcesor($categories);
//$dataprocessor->process('xml', 'file');