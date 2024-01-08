<?php

namespace Mindaugas\DvidesimttreciaPaskaita;


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
            //$cerrormsg = $cerror->getMessage();
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