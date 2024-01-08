<?php

declare(strict_types=1);
//1.1
//Parašykite klasę KilometerConverter
//Į konstruktorių turi būti paduodamas atstumas kilometrais (float).
//Klasė turi turėti metodus, kuriuos būtų galima kviesti iš klasės išorės:
//- convertToNauticalMiles()
//- convertToMiles()
//- convertToYards()
//- convertToCentimeters()
//
//Svarbu: Konvertavimo matmenys (pvz nautical mile = 1.852) turi būti saugomi klasės konstantose.
//
//$a = new KilometerConverter(55);
//echo $a->convertToCentimeters();
class KilometerConverter
{
public const NAUTICA_MILES = 1.852;
public const MILES = 1.60934;
public const YARDS = 0.0009144;
public const CENTIMETERS = 0.00001;

public function __construct(protected int $lengtkm)
{

}

public function convertToNauticalMiles():float
{

    return round($this->lengtkm/self::NAUTICA_MILES,3);
}

    public function convertToMiles():float
    {

        return round($this->lengtkm/self::MILES,3);
    }

    public function convertToYards():float
    {

        return round($this->lengtkm/self::YARDS,3);
    }

    public function convertToCentimeters():float
    {

        return round($this->lengtkm/self::CENTIMETERS,3);
    }
//1.2 Klasei KilometerConverter pridėkite statinį metodą, kuris gali būti kviečiamas iš klasės išorės:
//- getConversionRates(). Šis metodas turi grąžinti masyvą su visais konvertavimo matmenimis:
//Šio metodo kvietimo rezultatas turetų būti:
//[
//    'nautical_mile' => 1.852,
//    'mile' => 1.60934,
//    'yard' => 0.0009144,
//    'centimeter' => 1.0E-5,
//]
    public static function getConversionRates(): array
    {
        return [
            'nautical_mile' => self::NAUTICA_MILES,
            'mile' => self::MILES,
            'yard' => self::YARDS,
            'centimeter' => self::CENTIMETERS
        ];
    }
}





$a = new KilometerConverter(55);
echo $a->convertToNauticalMiles();echo PHP_EOL;
//$b = new KilometerConverter(55);
echo $a->convertToMiles();echo PHP_EOL;
//$c = new KilometerConverter(55);
echo $a->convertToYards();echo PHP_EOL;
//$d = new KilometerConverter(55);
echo $a->convertToCentimeters();echo PHP_EOL;
print_r(KilometerConverter::getConversionRates());echo PHP_EOL;

//1.3
//Įgyvendinkite konvertavimo logiką panaudojant abstrakčią klasę.
//Sukurkite abstrakčią klasę AbstractKilometerConverter. Ši klasė turės vieną metodą: convert().
//
//Iš šios klasės sukurkite 4 išvestines klases, kurių kiekviena implementuotų metodą convert()
//ir atliktų tik tai klasei pavestą konversiją:
//- NauticalMileConverter
//- MileConverter
//- YardConverter
//- CentimeterConverter
//
//Pavyzdys:
//$centimeterConverter = new CentimeterConverter(100);
//echo $centimeterConverter->convert();

//abstract class AbstractKilometerConverter
//{
//    public const NAUTICA_MILES = 1.852;
//    public const MILES = 1.60934;
//    public const YARDS = 0.0009144;
//    public const CENTIMETERS = 0.00001;
//
//    public function __construct(protected int $lengtkm)
//    {
//
//    }
//
//    abstract public function convert(): float;
//}

abstract class AbstractKilometerConverter extends KilometerConverter
{
        abstract public function convert(): float;
}
class NauticalMileConverter extends AbstractKilometerConverter
{
    public function convert(): float
    {

        return round($this->lengtkm / self::NAUTICA_MILES, 3);
    }
}

class MileConverter extends AbstractKilometerConverter
{
    public function convert(): float
    {

        return round($this->lengtkm / self::MILES, 3);
    }
}
class YardConverter extends AbstractKilometerConverter
{
    public function convert(): float
    {

        return round($this->lengtkm / self::YARDS, 3);
    }
}

class CentimeterConverter extends AbstractKilometerConverter
{
    public function convert(): float
    {

        return round($this->lengtkm / self::CENTIMETERS, 3);
    }
}
$x=new centimeterConverter(55);
echo $x->convert();