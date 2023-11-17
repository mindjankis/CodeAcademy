<?php
declare (strict_types=1);

$eventname = readline('Event name:');
$eventdate= readline('Event date (YYYY-MM-DD):');
$curentdate=new DateTime();
$eventdateObject=DateTime::createFromFormat('Y-m-d', $eventdate);
$diference=$eventdateObject->diff($curentdate);
        if($diference->invert==0) {
            print_r($diference->format($eventname.' was %a ago'));
            echo PHP_EOL;
        }
            else{
                print_r($diference->format($eventname.' will be in %a days'));
                echo PHP_EOL;
            }

