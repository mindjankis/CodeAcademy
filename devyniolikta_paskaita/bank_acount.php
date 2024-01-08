<?php

declare(strict_types=1);

/*
Sukurkite išvestines klases, kurios paveldėtų klasę BankAccount:
- klasė StudentAccount - Ši klasė turi netaikyti jokių mokesčių depozitams.

- klasė ChildAccount - Ši klasė neturi leisti per vieną kartą išleisti daugiau nei 10eur.

- klasė CreditAccount - Ši klasė turi leisti balansui nukristi iki -X sumos ($maxCreditAmount).
T.y. balansas gali buti neigiamas. $maxCreditAmount yra teigiama integer tipo reikšmė.
Jeigu $maxCreditAmount yra 100, tai reiškia, kad balansas negali kristi žemiau -100.
Ši suma ($maxCreditAmount) turi būti paduodama per konstruktorių.
Pavyzdys:
$account = new CreditAccount(1000, 100);

- klasė SavingsAccount. Ši klasė turi suteikti galimybę padidinti sąskaitos balansą tam tikru procentu.
T.y. - ji gali turėti public metodą 'addInterest', kurį iškvietus su X procentu (pvz.: 0.05), balansas padidėtų tuo procentu
Įsivaizduokite, kad šis metodas būtų kviečiamas kas metus ir sąskaita tokiu būdu augtų.
Prie balanso pridedamas palūkanas verskite į int tipą.
Pavyzdys:
$account = new SavingsAccount(1000);
$account->addInterest(0.05);

*/

class BankAccount
{
    protected int $balance;

    public function __construct(int $balance = 0)
    {
        if ($balance < 0) {
            $this->balance = 0;
            die('Balance cannot be less than 0');
        }
        $this->balance = $balance;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function spend(int $amount): void
    {
        if ($amount > $this->balance) {
            die('Cannot spend more than you have');
        }

        if ($amount <= 0) {
            die('Can only spend a positive amount');
        }

        $this->balance = $this->balance - $amount;
    }

    public function deposit(int $amount): void
    {
        $amount = $this->applyFees($amount);

        if ($amount > 0) {
            $this->balance = $this->balance + $amount;
        }
    }

    protected function applyFees(int $amount): int
    {
        return (int) round($amount - $amount * 0.01);
    }
}

class StudentAccount extends BankAccount
{
//public function applyFeesStudent (int $amount): int
//{
//    return parent::applyFees($amount); // irgi veikia
//}

    public function depositstudent(int $amount): void
    {

        if ($amount > 0) {
            $this->balance = $this->balance + $amount;
        }
    }
}

//klasė ChildAccount - Ši klasė neturi leisti per vieną kartą išleisti daugiau nei 10eur.

class ChildAccount extends BankAccount
{
    public function spendasChild(int $amount): void
    {
        if ($amount > 10) {
            die('Spent amount is bigger than 10');
        }
        parent::spend($amount);
    }
}
//klasė CreditAccount - Ši klasė turi leisti balansui nukristi iki -X sumos ($maxCreditAmount).
//T.y. balansas gali buti neigiamas. $maxCreditAmount yra teigiama integer tipo reikšmė.
//Jeigu $maxCreditAmount yra 100, tai reiškia, kad balansas negali kristi žemiau -100.
//Ši suma ($maxCreditAmount) turi būti paduodama per konstruktorių.
//Pavyzdys:
//$account = new CreditAccount(1000, 100);
//$account = new BankAccount(1000);
class CreditAccount extends BankAccount {

    public function __construct(protected int $balance = 0, private int $maxCreditAmount)
{
    parent::__construct($balance);
}

    public function spendinCredit(int $amount): void
    {
        if ($amount > $this->balance+$this->maxCreditAmount) {
            die('Cannot spend more than you sum of your credit and balance');
        }

        if ($amount <= 0) {
            die('Can only spend a positive amount');
        }

        $this->balance = $this->balance - $amount;
    }
}

//klasė SavingsAccount. Ši klasė turi suteikti galimybę padidinti sąskaitos balansą tam tikru procentu.
//T.y. - ji gali turėti public metodą 'addInterest', kurį iškvietus su X procentu (pvz.: 0.05), balansas padidėtų tuo procentu
//Įsivaizduokite, kad šis metodas būtų kviečiamas kas metus ir sąskaita tokiu būdu augtų.
//Prie balanso pridedamas palūkanas verskite į int tipą.
//Pavyzdys:
//$account = new SavingsAccount(1000);
//$account->addInterest(0.05);

class SavingsAccount extends BankAccount
{
//    public function __construct(int $balance = 0)
//    {
//    parent::__construct($balance);
//    }

    public function addInterest (float $interestpercent):void
    {

         $this->balance=$this->balance+intval($this->balance*$interestpercent);
    }
}
//$account=new BankAccount(1000);
//$account->deposit(1000);
//$studentacc=new StudentAccount(100);
//$studentacc->depositstudent(100);
//$childacc=new ChildAccount(100);
//$childacc->spendasChild(10);
//$creditacc=new creditAccount(1000,100);
//$creditacc->spendinCredit(1101);
$savingsacc=new SavingsAccount(1000);
$savingsacc->addInterest(0.05);

//echo $account->getBalance();echo PHP_EOL;
//echo $studentacc->getBalance();echo PHP_EOL;
//echo $childacc->getBalance();echo PHP_EOL;
//echo $creditacc->getBalance();echo PHP_EOL;
echo $savingsacc->getBalance();;echo PHP_EOL;



