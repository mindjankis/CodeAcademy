<?php
declare(strict_types=1);
require_once '../vendor/autoload.php';

$fileName='book.pdf';
$reader = new \Asika\Pdf2text;
$output = $reader->decode($fileName);
dump($output);


