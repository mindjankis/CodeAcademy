<?php
$pattern = '/^(?=.*[!@#$%^&*_])(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{10,}$/';
$subject = 'weaRP1d$$b';
$result = preg_match($pattern, $subject);
if ($result) {
    echo "Stringas atitinka reguliarą išraišką\n";
} else {
    echo "Stringas neatitinka reguliaros išraiškos\n";
}
