<?php
declare(strict_types=1);

/*

Sukurkite klasių hierarchiją, skirtą valdyti kliento prekių krepšelį. Reikalingos klasės - Cart, CartItem, CartDiscount, Customer.


Customer metodai:
__construct(string $name, string $surname, string $level)
getFullName()
getLevel() - gali būti 'A', 'B' arba 'C'

CartItem metodai:
__construct(string $name, int $price)
getName() - prekės pavadinimas pvz.: 'Iphone 13'
getPrice() - prekė kaina pvz.: 1300 (naudokite int)

CartDiscount metodai:
__construct(int $percent, string $userLevel)
getDiscountPercent() - nuolaidos procentas pvz.: 15
getCustomerLevel() - gali būti 'A', 'B' arba 'C'

Cart metodai:
__construct(Customer $customer)
addItem(CartItem $cartItem) - turi leisti pridėti CartItem objektą. Galite saugoti CartItem'us masyve.
addDiscount(CartDiscount $cartDiscount) - turi leisti pridėti CartDiscount objektus
getTotal() - turi grąžinti visą krepšelio sumą su pritaikytomis nuolaidomis.
Suapvalinkite iki 2 skaičių po kablelio
Skaičiuojant total nuolaidos sumuojasi. Turi būti pritaikomos tik tos nuolaidos,
kurių customerLevel sutampa su krepšelio kliento leveliu.


Kaip turėtų būti kviečiamas kodas:

$customer = new Customer('John', 'Smith', 'A');
$cart = new Cart($customer);

$iphone = new CartItem('Iphone 13', 1300);
$airpods = new CartItem('Airpods Pro', 200);
$cart->addItem($iphone);
$cart->addItem($airpods);

$cartDiscount1 = new CartDiscount(15, 'A');
$cart->addDiscount($cartDiscount1);
$cartDiscount2 = new CartDiscount(2, 'A');
$cart->addDiscount($cartDiscount2);
$cartDiscount3 = new CartDiscount(20, 'B');
$cart->addDiscount($cartDiscount3);

$total = $cart->getTotal();
var_dump($total); // 1249.5

*/
//Sukurkite klasių hierarchiją, skirtą valdyti kliento prekių krepšelį. Reikalingos klasės -
// Cart, CartItem, CartDiscount, Customer.

class Customer
{
    public function __construct(private string $name, private string $surname, private string $level)
    {

    }

    public function getFullName(): string
    {
        return $this->name . ' ' . $this->surname;
    }

    public function getLevel(): string
    {
        return $this->level;
    }
}


class CartItem {
    public function __construct(private string $name, private int $price)
    {

    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

}

class CartDiscount {
    public function __construct(private int $percent, private string $userLevel)
    {

    }

    public function getDiscountPercent():int{
        return $this->percent;
    }

    public function getCustomerLevel():string{
        return $this->userLevel;
    }
}

class Cart {

    private array $arrayCartItems=[];
    private array $arrayCartDiscounts=[];

    public function __construct(private Customer $customer)
    {

    }
    public function addItem(CartItem $cartItem):void{
        $this->arrayCartItems[]=$cartItem;
    }

    public function addDiscount(CartDiscount $cartDiscount):void{
        $this->arrayCartDiscounts[]=$cartDiscount;
    }

    public function getTotal():float{
        $totalprice=0;
        /** @var CartItem $arrayCartItem */
        foreach ($this->arrayCartItems as $arrayCartItem){
            $totalprice+=$arrayCartItem->getPrice();
        }
        $totaldiscount=0;
        /** @var CartDiscount $arrayCartDiscount */
        foreach ($this->arrayCartDiscounts as $arrayCartDiscount){
            if($this->customer->getLevel()==$arrayCartDiscount->getCustomerLevel()){
                $totaldiscount+=$arrayCartDiscount->getDiscountPercent();
            }
        }
        print_r($this->customer->getFullName()); echo PHP_EOL;
        print_r($this->customer->getLevel()); echo PHP_EOL;
        return round($totalprice-($totalprice*$totaldiscount/100),2);
    }
}

$customer = new Customer('John', 'Smith', 'A');
$cart=new Cart($customer);
$iphone = new CartItem('Iphone 13', 1300);
$airpods = new CartItem('Airpods Pro', 200);
$cart->addItem($iphone);
$cart->addItem($airpods);
$cartDiscount1 = new CartDiscount(15, 'A');
$cart->addDiscount($cartDiscount1);
$cartDiscount2 = new CartDiscount(2, 'A');
$cart->addDiscount($cartDiscount2);
$cartDiscount3 = new CartDiscount(20, 'B');
$cart->addDiscount($cartDiscount3);
$total=$cart->gettotal();
var_dump($total);