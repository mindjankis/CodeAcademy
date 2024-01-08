<?php

declare(strict_types=1);

/*
1.1 Parašykite įrankį slaptažodžio stiprumui nustatyti.
Slaptažodis turi:
- būti sudarytas iš ne mažiau 10 simblių
- turi turėti bent 2 skirtingus specialiuosius simbolius (!@#$%^&*_)
- turi turėti ir mažųjų, ir didžiųjų raidžių (aB)
- turi turėti bent vieną skaitmenį (0-9)

Slaptažodžio validavimas turi vykti klasėje PasswordValidator.
Validatorius, atradęs taisyklės pažeidimą, turi mesti exception'ą su žinute (pvz.: "Password must be at least ten symbols long")
Kodas, kviečiantis validatorių turi gaudyti exception'ą ir spausdinti žinutę terminale.
Jeigu slaptažodis atitinka reikalavimus, spausdinkite "Password is valid"

Failo kvietimo pavyzdys:
php -f 1_password_validator.php 123456
Password must be at least 10 symbols long

php -f 1_password_validator.php 123456aBc!@
Password is valid

1.2 Patobulinkite validatoriu. Validatorius turi sukaupti visas klaidas ir jas išspausdinti.

Failo kvietimo pavyzdys:
php -f 1_password_validator.php 123456
Password must be at least 10 symbols long
Password must contain at least 2 special symbols (!@#$%^&*_)
Password must contain uppercase and lowercase letters

*/
class PswVldException extends Exception
{
}
class PasswordValidator
{
private array $arrayoferrors=[];

public function printarrayoferrors():void{
    foreach ($this->arrayoferrors as $arrayoferror){
        echo $arrayoferror->getMessage().PHP_EOL;
    }
}
    public function validatePassword(string $password):void
    {
        // Rule 1: Password must be at least 10 symbols long
        if (strlen($password) < 10) {
            $aerror=new PswVldException("Password must be at least ten symbols long");
            $this->arrayoferrors[]=$aerror->getMessage();
            $rule1=true;
            throw $aerror;
        }
        else {$rule1=false;}

        // Rule 2: Must contain at least 2 different special characters
        $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*'];
        $numSpecialChars = count(array_intersect(str_split($password), $specialChars));
        if ($numSpecialChars < 2) {
            $berror=new PswVldException("Password must contain at least 2 different special characters");
            $this->arrayoferrors[]=$berror->getMessage();
            $rule2=true;
            throw $berror;
        }
        else {$rule2=false;}

        // Rule 3: Must contain both lowercase and uppercase letters
        if (!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password)) {
            $cerror=new PswVldException("Password must contain both lowercase and uppercase letters");
            $this->arrayoferrors[]=$cerror->getMessage();
            $rule3=true;
            throw $cerror;
        }
        else {$rule3=false;}

        // Rule 4: Must have at least one digit
        if (!preg_match('/\d/', $password)) {
            $derror=new PswVldException("Password must have at least one digit (0-9)");
            $this->arrayoferrors[]=$derror->getMessage();
            $rule4=true;
            throw $derror;
        }
        else {$rule4=false;}

        // If all rules pass, the password is valid
        if($rule1==false && $rule2==false && $rule3==false && $rule4==false){
        echo "Password is valid\n";}
    }
}

// Example usage
try {
    // Test passwords
    $x=new PasswordValidator();
    $validPassword = "aB1!Ab2cd$";
    $invalidPassword = "weakPwd$";
    $x->validatePassword($invalidPassword);
    $x->printarrayoferrors();

}
catch (PswVldException $aerror) {
    echo $aerror->getMessage().PHP_EOL;
}
catch (PswVldException $berror) {
    echo $berror->getMessage().PHP_EOL;
}
catch (PswVldException $cerror) {
    echo $cerror->getMessage().PHP_EOL;
}
catch (PswVldException $derror) {
    echo $derror->getMessage().PHP_EOL;
}



