<?php

declare(strict_types=1);

class InventoryException extends Exception
{
}

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

class CheckInventory
{

    public function __construct(private Logger $logger)
    {
    }

    public const JSON_FILE_PATH = './inventory.json';

    public function preparejson(): array
    {
        if (file_exists(self::JSON_FILE_PATH)) {
            $jsonarrays = json_decode(file_get_contents(self::JSON_FILE_PATH), true);
            $result = [];
            foreach ($jsonarrays as $jsonarray) {
                $result[$jsonarray['product_id']] = $jsonarray;
            }
        }
        return $result;
    }

    public function preparerequest(string $request): array
    {
        $pattern = '/^\d+:\d+(,\d+:\d+)*$/';
        if (!preg_match($pattern, $request)) {
            $cerror = new InventoryException(
                sprintf('Invalid input "%s". Format: id:quantity,id:quantity', $request));
            $cerrormsg = $cerror->getMessage();
            //$this->logger->addlogger($cerrormsg);
            //echo $berrormsg;echo PHP_EOL;
            throw $cerror;
        }
        $requestarray = explode(',', $request);
        return $requestarray;
    }

    public function checkinv(array $requests, array $json): void
    {
        foreach ($requests as $request) {
            $explodedrequest = explode(':', $request);
            //$a=$json[$explodedrequest[0]]['quantity'];
            $b = $explodedrequest[0];
            //echo $b.PHP_EOL;
            if (!isset($json[$b])) {
                $berror = new InventoryException(
                    sprintf('product "%d" is not in the inventory', $b));
                $berrormsg = $berror->getMessage();
                $this->logger->addlogger($berrormsg);
                //echo $berrormsg;echo PHP_EOL;
                throw $berror;
            }
            if ($json[$explodedrequest[0]]['quantity'] < $explodedrequest[1]) {
                $aerror = new InventoryException(
                    sprintf('product "%d" only has %d items in the inventory', $explodedrequest[0],
                        $json[$explodedrequest[0]]['quantity']));
                $aerrormsg = $aerror->getMessage();
                $this->logger->addlogger($aerrormsg);
                //echo $aerrormsg;echo PHP_EOL;
                throw $aerror;
            }
        }
    }
}

$inv = new CheckInventory(new Logger());
try {
    $inv->checkinv($inv->preparerequest('1:3,2:2,4:1'), $inv->preparejson());
} catch (InventoryException $berror) {
    echo $berror->getMessage();
} catch (InventoryException $aerror) {
    echo $aerror->getMessage();
} catch (InventoryException $cerror) {
    echo $cerror->getMessage();
}
echo 'ALL IS GOOD!';
/*
2.1 Parašykite įrankį inventoriaus tikrinimui. Inventorių rasite faile "./inventory.json"
Programa turėtų veikti paduodant jai produkto id ir kiekio poras, atskirtas dvitaškiu. Pačios poros atskirtos kableliais:
Pvz.: php -f 2_inventory_checker.php "1:3,2:2,4:1" - reiškia, kad mes norime patikrinti, ar inventoriuje egzistuoja:
- produktas, kurio id yra 1, o kiekis 3
- produktas, kurio id yra 2, o kiekis 2
- produktas, kurio id yra 4, o kiekis 1

Jeigu paduotas produkto id neegzistuoja, arba nepakanka kiekio, į terminalą išspausdinkite pranešimą:
- product "15" is not in the inventory
- product "5" only has 0 items in the inventory
Pakaks spausdinti tik vieną klaidą apie inventoriaus neatitikimus, net jeigu tikrinami keli nevalidūs produktai.

Šalia klaidos pranešimo spausdinimo taip pat, įrašykite pranešimą apie šį įvykį į log'ą (log.txt)
Log'o įrašo formatas: 2020-01-01 15:15:15 product "15" is not in the inventory


Užduočiai įgyvendinti panaudokite exception'us.
Klasė, tikrinanti inventorių, turi mesti exception'us, o ją kviečiantis kodas - gaudyti. Naudokite savo custom
exception'o klasę (pvz.: InventoryException).


Programos kvietimo pavyzdys:
php -f 2_inventory_checker.php "1:3,2:2,5:1"
product "5" only has 0 items in the inventory

php -f 2_inventory_checker.php "1:3,2:2"
all products have the requested quantity in stock

*/

/*
2.2 Patobulinkite 2.1 užduoties įrankį - pridėkite inputo validatorių (atskira klasė)
Šis validatorius turi užfiksuoti, kad šie inputai nėra validūs:
- "q:3,2:2,5:1"
- "-:3,2:2,5:1"
- "3,2:2,5:1"

Kai užfiksuojamas nevalidus inputas, programa turi į komandinę eilutę išspausdinti šį pranešimą:
Invalid input "3,2:2,5:1". Format: id:quantity,id:quantity

Klaidingo inputo atveju į log'ą rašyti pranešimo nereikia.
Svarbu: Abi klasės (inventoriy checkeris ir input validatorius) turi būti kviečiami tame pačiame "try" bloke.
Naudokite savo custom exception'o klasę (pvz.: InputValidationException).


Programos kvietimo pavyzdys:
php -f 2_inventory_checker.php "3,2:2,5:1"
Invalid input "3,2:2,5:1". Format: id:quantity,id:quantity
*/
