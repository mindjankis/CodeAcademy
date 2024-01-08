<?php

declare(strict_types=1);
require_once '.\vendor\autoload.php';


//spl_autoload_register(function($className){
//    if($className==='dvidesimtpirma_paskaita\InventoryException'){
//        require '.\src\InventoryException.php';
//    }
//});
//
//spl_autoload_register(function($className){
//    if($className==='dvidesimtpirma_paskaita\Logger'){
//        require '.\src\Logger.php';
//    }
//});
//
//spl_autoload_register(function($className){
//    if($className==='dvidesimtpirma_paskaita\CheckInventory'){
//        require '.\src\CheckInventory.php';
//    }
//});
use Mindaugas\DvidesimttreciaPaskaita\InventoryException;
use Mindaugas\DvidesimttreciaPaskaita\CheckInventory;
use Mindaugas\DvidesimttreciaPaskaita\Logger;

//use dvidesimtpirma_paskaita\InventoryException;
//use dvidesimtpirma_paskaita\CheckInventory;
//use dvidesimtpirma_paskaita\Logger;


$inv = new CheckInventory(new Logger());
    //new CheckInventory(new Logger());
$endmessage=true;
try {
    $inv->checkinv($inv->preparerequest('1:3,2:2,4:1'), $inv->preparejson());
} catch (InventoryException $berror) {
    echo $berror->getMessage();
    $endmessage=false;
} catch (InventoryException $aerror) {
    echo $aerror->getMessage();
    $endmessage=false;
} catch (InventoryException $cerror) {
    echo $cerror->getMessage();
    $endmessage=false;
}
if($endmessage===true) {
    echo 'All products have the requested quantity in stock';
}